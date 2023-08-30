<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class AsyncConfig extends Model
{
    /**
     * @example 2006-01-02T15:04:05Z07:00
     *
     * @var string
     */
    public $createdTime;

    /**
     * @var DestinationConfig
     */
    public $destinationConfig;

    /**
     * @example acs:fc:cn-shanghai:1234/functions/my-func
     *
     * @var string
     */
    public $functionArn;

    /**
     * @example 2006-01-02T15:04:05Z07:00
     *
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @example 3600
     *
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxAsyncRetryAttempts;
    protected $_name = [
        'createdTime'               => 'createdTime',
        'destinationConfig'         => 'destinationConfig',
        'functionArn'               => 'functionArn',
        'lastModifiedTime'          => 'lastModifiedTime',
        'maxAsyncEventAgeInSeconds' => 'maxAsyncEventAgeInSeconds',
        'maxAsyncRetryAttempts'     => 'maxAsyncRetryAttempts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->destinationConfig) {
            $res['destinationConfig'] = null !== $this->destinationConfig ? $this->destinationConfig->toMap() : null;
        }
        if (null !== $this->functionArn) {
            $res['functionArn'] = $this->functionArn;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->maxAsyncEventAgeInSeconds) {
            $res['maxAsyncEventAgeInSeconds'] = $this->maxAsyncEventAgeInSeconds;
        }
        if (null !== $this->maxAsyncRetryAttempts) {
            $res['maxAsyncRetryAttempts'] = $this->maxAsyncRetryAttempts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AsyncConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['destinationConfig'])) {
            $model->destinationConfig = DestinationConfig::fromMap($map['destinationConfig']);
        }
        if (isset($map['functionArn'])) {
            $model->functionArn = $map['functionArn'];
        }
        if (isset($map['lastModifiedTime'])) {
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if (isset($map['maxAsyncEventAgeInSeconds'])) {
            $model->maxAsyncEventAgeInSeconds = $map['maxAsyncEventAgeInSeconds'];
        }
        if (isset($map['maxAsyncRetryAttempts'])) {
            $model->maxAsyncRetryAttempts = $map['maxAsyncRetryAttempts'];
        }

        return $model;
    }
}
