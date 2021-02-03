<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmMonitorRequest\ispCityNode;
use AlibabaCloud\Tea\Model;

class AddDnsGtmMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @var ispCityNode[]
     */
    public $ispCityNode;
    protected $_name = [
        'lang'              => 'Lang',
        'addrPoolId'        => 'AddrPoolId',
        'protocolType'      => 'ProtocolType',
        'interval'          => 'Interval',
        'evaluationCount'   => 'EvaluationCount',
        'timeout'           => 'Timeout',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'ispCityNode'       => 'IspCityNode',
    ];

    public function validate()
    {
        Model::validateRequired('addrPoolId', $this->addrPoolId, true);
        Model::validateRequired('protocolType', $this->protocolType, true);
        Model::validateRequired('interval', $this->interval, true);
        Model::validateRequired('evaluationCount', $this->evaluationCount, true);
        Model::validateRequired('timeout', $this->timeout, true);
        Model::validateRequired('monitorExtendInfo', $this->monitorExtendInfo, true);
        Model::validateRequired('ispCityNode', $this->ispCityNode, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }
        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }
        if (null !== $this->monitorExtendInfo) {
            $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        }
        if (null !== $this->ispCityNode) {
            $res['IspCityNode'] = [];
            if (null !== $this->ispCityNode && \is_array($this->ispCityNode)) {
                $n = 0;
                foreach ($this->ispCityNode as $item) {
                    $res['IspCityNode'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDnsGtmMonitorRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }
        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }
        if (isset($map['MonitorExtendInfo'])) {
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }
        if (isset($map['IspCityNode'])) {
            if (!empty($map['IspCityNode'])) {
                $model->ispCityNode = [];
                $n                  = 0;
                foreach ($map['IspCityNode'] as $item) {
                    $model->ispCityNode[$n++] = null !== $item ? ispCityNode::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
