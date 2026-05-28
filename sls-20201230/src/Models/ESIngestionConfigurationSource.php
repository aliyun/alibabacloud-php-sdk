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
    public $connectorMode;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $index;

    /**
     * @var int
     */
    public $maxDataDelaySec;

    /**
     * @var int
     */
    public $minFragRangeSec;

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
        'connectorMode' => 'ConnectorMode',
        'endTime' => 'EndTime',
        'index' => 'Index',
        'maxDataDelaySec' => 'MaxDataDelaySec',
        'minFragRangeSec' => 'MinFragRangeSec',
        'password' => 'Password',
        'query' => 'Query',
        'startTime' => 'StartTime',
        'timeFieldName' => 'TimeFieldName',
        'timeFormat' => 'TimeFormat',
        'timeZone' => 'TimeZone',
        'username' => 'Username',
        'vpcId' => 'VpcId',
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

        if (null !== $this->connectorMode) {
            $res['ConnectorMode'] = $this->connectorMode;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }

        if (null !== $this->maxDataDelaySec) {
            $res['MaxDataDelaySec'] = $this->maxDataDelaySec;
        }

        if (null !== $this->minFragRangeSec) {
            $res['MinFragRangeSec'] = $this->minFragRangeSec;
        }

        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->timeFieldName) {
            $res['TimeFieldName'] = $this->timeFieldName;
        }

        if (null !== $this->timeFormat) {
            $res['TimeFormat'] = $this->timeFormat;
        }

        if (null !== $this->timeZone) {
            $res['TimeZone'] = $this->timeZone;
        }

        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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

        if (isset($map['ConnectorMode'])) {
            $model->connectorMode = $map['ConnectorMode'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }

        if (isset($map['MaxDataDelaySec'])) {
            $model->maxDataDelaySec = $map['MaxDataDelaySec'];
        }

        if (isset($map['MinFragRangeSec'])) {
            $model->minFragRangeSec = $map['MinFragRangeSec'];
        }

        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TimeFieldName'])) {
            $model->timeFieldName = $map['TimeFieldName'];
        }

        if (isset($map['TimeFormat'])) {
            $model->timeFormat = $map['TimeFormat'];
        }

        if (isset($map['TimeZone'])) {
            $model->timeZone = $map['TimeZone'];
        }

        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
