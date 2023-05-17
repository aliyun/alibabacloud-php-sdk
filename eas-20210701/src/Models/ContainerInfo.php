<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class ContainerInfo extends Model
{
    /**
     * @var string
     */
    public $currentReaon;

    /**
     * @var string
     */
    public $currentStatus;

    /**
     * @var string
     */
    public $currentTimestamp;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $lastReason;

    /**
     * @var string
     */
    public $lastStatus;

    /**
     * @var string
     */
    public $lastTimestamp;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $port;

    /**
     * @var bool
     */
    public $ready;

    /**
     * @var int
     */
    public $restartCount;
    protected $_name = [
        'currentReaon'     => 'CurrentReaon',
        'currentStatus'    => 'CurrentStatus',
        'currentTimestamp' => 'CurrentTimestamp',
        'image'            => 'Image',
        'lastReason'       => 'LastReason',
        'lastStatus'       => 'LastStatus',
        'lastTimestamp'    => 'LastTimestamp',
        'name'             => 'Name',
        'port'             => 'Port',
        'ready'            => 'Ready',
        'restartCount'     => 'RestartCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentReaon) {
            $res['CurrentReaon'] = $this->currentReaon;
        }
        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }
        if (null !== $this->currentTimestamp) {
            $res['CurrentTimestamp'] = $this->currentTimestamp;
        }
        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }
        if (null !== $this->lastReason) {
            $res['LastReason'] = $this->lastReason;
        }
        if (null !== $this->lastStatus) {
            $res['LastStatus'] = $this->lastStatus;
        }
        if (null !== $this->lastTimestamp) {
            $res['LastTimestamp'] = $this->lastTimestamp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->ready) {
            $res['Ready'] = $this->ready;
        }
        if (null !== $this->restartCount) {
            $res['RestartCount'] = $this->restartCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ContainerInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentReaon'])) {
            $model->currentReaon = $map['CurrentReaon'];
        }
        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }
        if (isset($map['CurrentTimestamp'])) {
            $model->currentTimestamp = $map['CurrentTimestamp'];
        }
        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }
        if (isset($map['LastReason'])) {
            $model->lastReason = $map['LastReason'];
        }
        if (isset($map['LastStatus'])) {
            $model->lastStatus = $map['LastStatus'];
        }
        if (isset($map['LastTimestamp'])) {
            $model->lastTimestamp = $map['LastTimestamp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Ready'])) {
            $model->ready = $map['Ready'];
        }
        if (isset($map['RestartCount'])) {
            $model->restartCount = $map['RestartCount'];
        }

        return $model;
    }
}
