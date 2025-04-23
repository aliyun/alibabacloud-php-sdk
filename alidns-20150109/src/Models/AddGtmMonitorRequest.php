<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddGtmMonitorRequest\ispCityNode;

class AddGtmMonitorRequest extends Model
{
    /**
     * @var string
     */
    public $addrPoolId;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var int
     */
    public $interval;

    /**
     * @var ispCityNode[]
     */
    public $ispCityNode;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'addrPoolId' => 'AddrPoolId',
        'evaluationCount' => 'EvaluationCount',
        'interval' => 'Interval',
        'ispCityNode' => 'IspCityNode',
        'lang' => 'Lang',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'protocolType' => 'ProtocolType',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        if (\is_array($this->ispCityNode)) {
            Model::validateArray($this->ispCityNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addrPoolId) {
            $res['AddrPoolId'] = $this->addrPoolId;
        }

        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->ispCityNode) {
            if (\is_array($this->ispCityNode)) {
                $res['IspCityNode'] = [];
                $n1 = 0;
                foreach ($this->ispCityNode as $item1) {
                    $res['IspCityNode'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->monitorExtendInfo) {
            $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['AddrPoolId'])) {
            $model->addrPoolId = $map['AddrPoolId'];
        }

        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IspCityNode'])) {
            if (!empty($map['IspCityNode'])) {
                $model->ispCityNode = [];
                $n1 = 0;
                foreach ($map['IspCityNode'] as $item1) {
                    $model->ispCityNode[$n1++] = ispCityNode::fromMap($item1);
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['MonitorExtendInfo'])) {
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
