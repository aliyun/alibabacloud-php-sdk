<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeGtmMonitorConfigResponseBody\ispCityNodes;
use AlibabaCloud\Tea\Model;

class DescribeGtmMonitorConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var ispCityNodes[]
     */
    public $ispCityNodes;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var int
     */
    public $updateTimestamp;

    /**
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @var string
     */
    public $monitorConfigId;

    /**
     * @var int
     */
    public $createTimestamp;

    /**
     * @var int
     */
    public $interval;
    protected $_name = [
        'requestId'         => 'RequestId',
        'timeout'           => 'Timeout',
        'protocolType'      => 'ProtocolType',
        'ispCityNodes'      => 'IspCityNodes',
        'createTime'        => 'CreateTime',
        'updateTime'        => 'UpdateTime',
        'evaluationCount'   => 'EvaluationCount',
        'updateTimestamp'   => 'UpdateTimestamp',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'monitorConfigId'   => 'MonitorConfigId',
        'createTimestamp'   => 'CreateTimestamp',
        'interval'          => 'Interval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->ispCityNodes) {
            $res['IspCityNodes'] = [];
            if (null !== $this->ispCityNodes && \is_array($this->ispCityNodes)) {
                $n = 0;
                foreach ($this->ispCityNodes as $item) {
                    $res['IspCityNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->updateTimestamp) {
            $res['UpdateTimestamp'] = $this->updateTimestamp;
        }
        if (null !== $this->monitorExtendInfo) {
            $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        }
        if (null !== $this->monitorConfigId) {
            $res['MonitorConfigId'] = $this->monitorConfigId;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGtmMonitorConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['IspCityNodes'])) {
            if (!empty($map['IspCityNodes'])) {
                $model->ispCityNodes = [];
                $n                   = 0;
                foreach ($map['IspCityNodes'] as $item) {
                    $model->ispCityNodes[$n++] = null !== $item ? ispCityNodes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['UpdateTimestamp'])) {
            $model->updateTimestamp = $map['UpdateTimestamp'];
        }
        if (isset($map['MonitorExtendInfo'])) {
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }
        if (isset($map['MonitorConfigId'])) {
            $model->monitorConfigId = $map['MonitorConfigId'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        return $model;
    }
}
