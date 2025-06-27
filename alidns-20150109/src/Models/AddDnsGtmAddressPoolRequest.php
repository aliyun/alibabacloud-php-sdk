<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest\addr;
use AlibabaCloud\SDK\Alidns\V20150109\Models\AddDnsGtmAddressPoolRequest\ispCityNode;

class AddDnsGtmAddressPoolRequest extends Model
{
    /**
     * @var addr[]
     */
    public $addr;

    /**
     * @var int
     */
    public $evaluationCount;

    /**
     * @var string
     */
    public $instanceId;

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
    public $lbaStrategy;

    /**
     * @var string
     */
    public $monitorExtendInfo;

    /**
     * @var string
     */
    public $monitorStatus;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'addr' => 'Addr',
        'evaluationCount' => 'EvaluationCount',
        'instanceId' => 'InstanceId',
        'interval' => 'Interval',
        'ispCityNode' => 'IspCityNode',
        'lang' => 'Lang',
        'lbaStrategy' => 'LbaStrategy',
        'monitorExtendInfo' => 'MonitorExtendInfo',
        'monitorStatus' => 'MonitorStatus',
        'name' => 'Name',
        'protocolType' => 'ProtocolType',
        'timeout' => 'Timeout',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->addr)) {
            Model::validateArray($this->addr);
        }
        if (\is_array($this->ispCityNode)) {
            Model::validateArray($this->ispCityNode);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            if (\is_array($this->addr)) {
                $res['Addr'] = [];
                $n1 = 0;
                foreach ($this->addr as $item1) {
                    $res['Addr'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->evaluationCount) {
            $res['EvaluationCount'] = $this->evaluationCount;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->ispCityNode) {
            if (\is_array($this->ispCityNode)) {
                $res['IspCityNode'] = [];
                $n1 = 0;
                foreach ($this->ispCityNode as $item1) {
                    $res['IspCityNode'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }

        if (null !== $this->monitorExtendInfo) {
            $res['MonitorExtendInfo'] = $this->monitorExtendInfo;
        }

        if (null !== $this->monitorStatus) {
            $res['MonitorStatus'] = $this->monitorStatus;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Addr'])) {
            if (!empty($map['Addr'])) {
                $model->addr = [];
                $n1 = 0;
                foreach ($map['Addr'] as $item1) {
                    $model->addr[$n1] = addr::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EvaluationCount'])) {
            $model->evaluationCount = $map['EvaluationCount'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['IspCityNode'])) {
            if (!empty($map['IspCityNode'])) {
                $model->ispCityNode = [];
                $n1 = 0;
                foreach ($map['IspCityNode'] as $item1) {
                    $model->ispCityNode[$n1] = ispCityNode::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }

        if (isset($map['MonitorExtendInfo'])) {
            $model->monitorExtendInfo = $map['MonitorExtendInfo'];
        }

        if (isset($map['MonitorStatus'])) {
            $model->monitorStatus = $map['MonitorStatus'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
