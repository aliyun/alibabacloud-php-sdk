<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudCallCenter\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveRTCStatsV2Request extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $generalInfo;

    /**
     * @var string
     */
    public $googAddress;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $receiverReport;

    /**
     * @var string
     */
    public $senderReport;
    protected $_name = [
        'callId'         => 'CallId',
        'generalInfo'    => 'GeneralInfo',
        'googAddress'    => 'GoogAddress',
        'instanceId'     => 'InstanceId',
        'receiverReport' => 'ReceiverReport',
        'senderReport'   => 'SenderReport',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callId) {
            $res['CallId'] = $this->callId;
        }
        if (null !== $this->generalInfo) {
            $res['GeneralInfo'] = $this->generalInfo;
        }
        if (null !== $this->googAddress) {
            $res['GoogAddress'] = $this->googAddress;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->receiverReport) {
            $res['ReceiverReport'] = $this->receiverReport;
        }
        if (null !== $this->senderReport) {
            $res['SenderReport'] = $this->senderReport;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveRTCStatsV2Request
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallId'])) {
            $model->callId = $map['CallId'];
        }
        if (isset($map['GeneralInfo'])) {
            $model->generalInfo = $map['GeneralInfo'];
        }
        if (isset($map['GoogAddress'])) {
            $model->googAddress = $map['GoogAddress'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ReceiverReport'])) {
            $model->receiverReport = $map['ReceiverReport'];
        }
        if (isset($map['SenderReport'])) {
            $model->senderReport = $map['SenderReport'];
        }

        return $model;
    }
}
