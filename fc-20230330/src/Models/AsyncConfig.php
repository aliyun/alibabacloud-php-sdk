<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class AsyncConfig extends Model
{
    /**
     * @var bool
     */
    public $asyncTask;
    /**
     * @var string
     */
    public $createdTime;
    /**
     * @var DestinationConfig
     */
    public $destinationConfig;
    /**
     * @var string
     */
    public $functionArn;
    /**
     * @var string
     */
    public $lastModifiedTime;
    /**
     * @var int
     */
    public $maxAsyncEventAgeInSeconds;
    /**
     * @var int
     */
    public $maxAsyncRetryAttempts;
    protected $_name = [
        'asyncTask'                 => 'asyncTask',
        'createdTime'               => 'createdTime',
        'destinationConfig'         => 'destinationConfig',
        'functionArn'               => 'functionArn',
        'lastModifiedTime'          => 'lastModifiedTime',
        'maxAsyncEventAgeInSeconds' => 'maxAsyncEventAgeInSeconds',
        'maxAsyncRetryAttempts'     => 'maxAsyncRetryAttempts',
    ];

    public function validate()
    {
        if (null !== $this->destinationConfig) {
            $this->destinationConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asyncTask) {
            $res['asyncTask'] = $this->asyncTask;
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->destinationConfig) {
            $res['destinationConfig'] = null !== $this->destinationConfig ? $this->destinationConfig->toArray($noStream) : $this->destinationConfig;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['asyncTask'])) {
            $model->asyncTask = $map['asyncTask'];
        }

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
