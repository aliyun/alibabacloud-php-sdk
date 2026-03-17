<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\ViewSmartAccessGatewayDnsForwardsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $masterIp;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $outboundPortIndex;

    /**
     * @var string
     */
    public $outboundPortName;

    /**
     * @var string
     */
    public $outboundPortType;

    /**
     * @var string
     */
    public $slaveIp;
    protected $_name = [
        'domain' => 'Domain',
        'instanceId' => 'InstanceId',
        'masterIp' => 'MasterIp',
        'mode' => 'Mode',
        'outboundPortIndex' => 'OutboundPortIndex',
        'outboundPortName' => 'OutboundPortName',
        'outboundPortType' => 'OutboundPortType',
        'slaveIp' => 'SlaveIp',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->masterIp) {
            $res['MasterIp'] = $this->masterIp;
        }

        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        if (null !== $this->outboundPortIndex) {
            $res['OutboundPortIndex'] = $this->outboundPortIndex;
        }

        if (null !== $this->outboundPortName) {
            $res['OutboundPortName'] = $this->outboundPortName;
        }

        if (null !== $this->outboundPortType) {
            $res['OutboundPortType'] = $this->outboundPortType;
        }

        if (null !== $this->slaveIp) {
            $res['SlaveIp'] = $this->slaveIp;
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MasterIp'])) {
            $model->masterIp = $map['MasterIp'];
        }

        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        if (isset($map['OutboundPortIndex'])) {
            $model->outboundPortIndex = $map['OutboundPortIndex'];
        }

        if (isset($map['OutboundPortName'])) {
            $model->outboundPortName = $map['OutboundPortName'];
        }

        if (isset($map['OutboundPortType'])) {
            $model->outboundPortType = $map['OutboundPortType'];
        }

        if (isset($map['SlaveIp'])) {
            $model->slaveIp = $map['SlaveIp'];
        }

        return $model;
    }
}
