<?php

declare(strict_types=1);

namespace PsrDiscovery\Contracts\Implementations\Psr18;

use Psr\Http\Client\ClientInterface;
use PsrDiscovery\Collections\CandidatesCollection;
use PsrDiscovery\Contracts\Implementations\ImplementationContract;
use PsrDiscovery\Entities\CandidateEntity;

interface ClientsContract extends ImplementationContract
{
    /**
     * Add a potential candidate to the discovery process.
     *
     * @param CandidateEntity $candidate The candidate to add.
     */
    public static function add(CandidateEntity $candidate): void;

    /**
     * Return the candidates collection.
     */
    public static function candidates(): CandidatesCollection;

    /**
     * Discover and instantiate a matching implementation.
     */
    public static function discover(): ?ClientInterface;

    /**
     * Prefer a package over all others.
     *
     * @param string $package The package to prefer.
     */
    public static function prefer(string $package): void;

    /**
     * Override the discovery process' candidates collection with a new one.
     *
     * @param CandidatesCollection $candidates The new candidates collection.
     */
    public static function set(CandidatesCollection $candidates): void;

    /**
     * Return a singleton instance of a matching implementation.
     */
    public static function singleton(): ?ClientInterface;

    /**
     * Use a specific implementation instance.
     *
     * @param ?ClientInterface $instance
     */
    public static function use(?ClientInterface $instance): void;
}
