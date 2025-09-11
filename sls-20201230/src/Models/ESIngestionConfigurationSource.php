<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class ESIngestionConfigurationSource extends Model
{
    /**
     * @var string
     */
    public $bootstrapServers;

    /**
     * @var string
     */
    public $index;

    /**
     * @var int
     */
    public $minFragRangeSec;

    /**
     * @var string
     */
    public $connectorMode;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $maxDataDelaySec;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $timeFieldName;

    /**
     * @var string
     */
    public $timeFormat;

    /**
     * @var string
     */
    public $timeZone;

    /**
     * @var string
     */
    public $username;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'bootstrapServers' => 'BootstrapServers',
        'index' => 'Index',
        'minFragRangeSec' => 'MinFragRangeSec',
        'connectorMode' => 'connectorMode',
        'endTime' => 'endTime',
        'maxDataDelaySec' => 'maxDataDelaySec',
        'password' => 'password',
        'query' => 'query',
        'startTime' => 'startTime',
        'timeFieldName' => 'timeFieldName',
        'timeFormat' => 'timeFormat',
        'timeZone' => 'timeZone',
        'username' => 'username',
        'vpcId' => 'vpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bootstrapServers) {
            $res['BootstrapServers'] = $this->bootstrapServers;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->minFragRangeSec) {
            $res['MinFragRangeSec'] = $this->minFragRangeSec;
        }

        if (null !== $this->connectorMode) {
            $res['connectorMode'] = $this->connectorMode;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->maxDataDelaySec) {
            $res['maxDataDelaySec'] = $this->maxDataDelaySec;
        }

        if (null !== $this->password) {
            $res['password'] = $this->password;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->timeFieldName) {
            $res['timeFieldName'] = $this->timeFieldName;
        }

        if (null !== $this->timeFormat) {
            $res['timeFormat'] = $this->timeFormat;
        }

        if (null !== $this->timeZone) {
            $res['timeZone'] = $this->timeZone;
        }

        if (null !== $this->username) {
            $res['username'] = $this->username;
        }

        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
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
        if (isset($map['BootstrapServers'])) {
            $model->bootstrapServers = $map['BootstrapServers'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['MinFragRangeSec'])) {
            $model->minFragRangeSec = $map['MinFragRangeSec'];
        }

        if (isset($map['connectorMode'])) {
            $model->connectorMode = $map['connectorMode'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['maxDataDelaySec'])) {
            $model->maxDataDelaySec = $map['maxDataDelaySec'];
        }

        if (isset($map['password'])) {
            $model->password = $map['password'];
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['timeFieldName'])) {
            $model->timeFieldName = $map['timeFieldName'];
        }

        if (isset($map['timeFormat'])) {
            $model->timeFormat = $map['timeFormat'];
        }

        if (isset($map['timeZone'])) {
            $model->timeZone = $map['timeZone'];
        }

        if (isset($map['username'])) {
            $model->username = $map['username'];
        }

        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
