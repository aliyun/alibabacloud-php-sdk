<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\storeList\errorDetails;
use AlibabaCloud\Tea\Model;

class storeList extends Model
{
    /**
     * @example 2023-07-13T09:19:53
     *
     * @var string
     */
    public $beginCheckpoint;

    /**
     * @example 1
     *
     * @var int
     */
    public $conn;

    /**
     * @example 24
     *
     * @var int
     */
    public $delay;

    /**
     * @example 2023-07-13T09:19:53
     *
     * @var string
     */
    public $endCheckpoint;

    /**
     * @example null
     *
     * @var string
     */
    public $errMsg;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @example 1689250049
     *
     * @var int
     */
    public $gmt;

    /**
     * @example 2023-07-13T17:29:54
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-07-13T17:29:54
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example xxx.xxx.xxx.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example 1689250071
     *
     * @var int
     */
    public $latelyHeartbeatTimeSec;

    /**
     * @example xxx.xxx.xxx.1-7145:OB_ORACLE_np_4w3r***_4w:0000***97
     *
     * @var string
     */
    public $name;

    /**
     * @example 2883
     *
     * @var int
     */
    public $port;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $region;

    /**
     * @example EXCEPTION
     *
     * @var string
     */
    public $status;

    /**
     * @example 2882
     *
     * @var int
     */
    public $storePort;

    /**
     * @description SubTopic。
     *
     * @example OB_ORACLE_np_4w3***c_4w3**-0
     *
     * @var string
     */
    public $subtopic;

    /**
     * @example false
     *
     * @var bool
     */
    public $toSwitch;

    /**
     * @description Topic。
     *
     * @example OB_ORACLE_np_4w3r29c_4w3****
     *
     * @var string
     */
    public $topic;

    /**
     * @example 0
     *
     * @var int
     */
    public $tps;
    protected $_name = [
        'beginCheckpoint'        => 'BeginCheckpoint',
        'conn'                   => 'Conn',
        'delay'                  => 'Delay',
        'endCheckpoint'          => 'EndCheckpoint',
        'errMsg'                 => 'ErrMsg',
        'errorDetails'           => 'ErrorDetails',
        'gmt'                    => 'Gmt',
        'gmtCreate'              => 'GmtCreate',
        'gmtModified'            => 'GmtModified',
        'ip'                     => 'Ip',
        'latelyHeartbeatTimeSec' => 'LatelyHeartbeatTimeSec',
        'name'                   => 'Name',
        'port'                   => 'Port',
        'region'                 => 'Region',
        'status'                 => 'Status',
        'storePort'              => 'StorePort',
        'subtopic'               => 'Subtopic',
        'toSwitch'               => 'ToSwitch',
        'topic'                  => 'Topic',
        'tps'                    => 'Tps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginCheckpoint) {
            $res['BeginCheckpoint'] = $this->beginCheckpoint;
        }
        if (null !== $this->conn) {
            $res['Conn'] = $this->conn;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }
        if (null !== $this->endCheckpoint) {
            $res['EndCheckpoint'] = $this->endCheckpoint;
        }
        if (null !== $this->errMsg) {
            $res['ErrMsg'] = $this->errMsg;
        }
        if (null !== $this->errorDetails) {
            $res['ErrorDetails'] = [];
            if (null !== $this->errorDetails && \is_array($this->errorDetails)) {
                $n = 0;
                foreach ($this->errorDetails as $item) {
                    $res['ErrorDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->gmt) {
            $res['Gmt'] = $this->gmt;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->latelyHeartbeatTimeSec) {
            $res['LatelyHeartbeatTimeSec'] = $this->latelyHeartbeatTimeSec;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storePort) {
            $res['StorePort'] = $this->storePort;
        }
        if (null !== $this->subtopic) {
            $res['Subtopic'] = $this->subtopic;
        }
        if (null !== $this->toSwitch) {
            $res['ToSwitch'] = $this->toSwitch;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->tps) {
            $res['Tps'] = $this->tps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginCheckpoint'])) {
            $model->beginCheckpoint = $map['BeginCheckpoint'];
        }
        if (isset($map['Conn'])) {
            $model->conn = $map['Conn'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }
        if (isset($map['EndCheckpoint'])) {
            $model->endCheckpoint = $map['EndCheckpoint'];
        }
        if (isset($map['ErrMsg'])) {
            $model->errMsg = $map['ErrMsg'];
        }
        if (isset($map['ErrorDetails'])) {
            if (!empty($map['ErrorDetails'])) {
                $model->errorDetails = [];
                $n                   = 0;
                foreach ($map['ErrorDetails'] as $item) {
                    $model->errorDetails[$n++] = null !== $item ? errorDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Gmt'])) {
            $model->gmt = $map['Gmt'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['LatelyHeartbeatTimeSec'])) {
            $model->latelyHeartbeatTimeSec = $map['LatelyHeartbeatTimeSec'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorePort'])) {
            $model->storePort = $map['StorePort'];
        }
        if (isset($map['Subtopic'])) {
            $model->subtopic = $map['Subtopic'];
        }
        if (isset($map['ToSwitch'])) {
            $model->toSwitch = $map['ToSwitch'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Tps'])) {
            $model->tps = $map['Tps'];
        }

        return $model;
    }
}
