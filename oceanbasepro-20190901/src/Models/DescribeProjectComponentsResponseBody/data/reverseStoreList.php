<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeProjectComponentsResponseBody\data\reverseStoreList\errorDetails;

class reverseStoreList extends Model
{
    /**
     * @var string
     */
    public $beginCheckpoint;

    /**
     * @var int
     */
    public $conn;

    /**
     * @var int
     */
    public $delay;

    /**
     * @var string
     */
    public $endCheckpoint;

    /**
     * @var string
     */
    public $errMsg;

    /**
     * @var errorDetails[]
     */
    public $errorDetails;

    /**
     * @var int
     */
    public $gmt;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $latelyHeartbeatTimeSec;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storePort;

    /**
     * @var string
     */
    public $subtopic;

    /**
     * @var bool
     */
    public $toSwitch;

    /**
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $tps;
    protected $_name = [
        'beginCheckpoint' => 'BeginCheckpoint',
        'conn' => 'Conn',
        'delay' => 'Delay',
        'endCheckpoint' => 'EndCheckpoint',
        'errMsg' => 'ErrMsg',
        'errorDetails' => 'ErrorDetails',
        'gmt' => 'Gmt',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'ip' => 'Ip',
        'latelyHeartbeatTimeSec' => 'LatelyHeartbeatTimeSec',
        'name' => 'Name',
        'port' => 'Port',
        'region' => 'Region',
        'status' => 'Status',
        'storePort' => 'StorePort',
        'subtopic' => 'Subtopic',
        'toSwitch' => 'ToSwitch',
        'topic' => 'Topic',
        'tps' => 'Tps',
    ];

    public function validate()
    {
        if (\is_array($this->errorDetails)) {
            Model::validateArray($this->errorDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->errorDetails)) {
                $res['ErrorDetails'] = [];
                $n1 = 0;
                foreach ($this->errorDetails as $item1) {
                    $res['ErrorDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['ErrorDetails'] as $item1) {
                    $model->errorDetails[$n1] = errorDetails::fromMap($item1);
                    ++$n1;
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
