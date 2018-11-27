<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\JobTrigger;

/**
 * Whether the trigger is currently active. If PAUSED or CANCELLED, no jobs
 * will be created with this configuration. The service may automatically
 * pause triggers experiencing frequent errors. To restart a job, set the
 * status to HEALTHY after correcting user errors.
 *
 * Protobuf type <code>google.privacy.dlp.v2.JobTrigger.Status</code>
 */
class Status
{
    /**
     * Generated from protobuf enum <code>STATUS_UNSPECIFIED = 0;</code>
     */
    const STATUS_UNSPECIFIED = 0;
    /**
     * Trigger is healthy.
     *
     * Generated from protobuf enum <code>HEALTHY = 1;</code>
     */
    const HEALTHY = 1;
    /**
     * Trigger is temporarily paused.
     *
     * Generated from protobuf enum <code>PAUSED = 2;</code>
     */
    const PAUSED = 2;
    /**
     * Trigger is cancelled and can not be resumed.
     *
     * Generated from protobuf enum <code>CANCELLED = 3;</code>
     */
    const CANCELLED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Status::class, \Google\Cloud\Dlp\V2\JobTrigger_Status::class);
