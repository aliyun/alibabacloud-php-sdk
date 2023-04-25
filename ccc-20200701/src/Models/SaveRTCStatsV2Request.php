<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SaveRTCStatsV2Request extends Model
{
    /**
     * @example 257e73de-1ee8-123b-0b9a-00163e0a****
     *
     * @var string
     */
    public $callId;

    /**
     * @var string
     */
    public $generalInfo;

    /**
     * @example ["47.101.XX.XX","44368","47.104.XX.XX","37947"]
     *
     * @var string
     */
    public $googAddress;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["1","1649328987","40","PCMU","383560","89","49","ssrc_1649328987_recv","2022-03-15T09:52:08.820Z","","0","20000"]
     *
     * @var string
     */
    public $receiverReport;

    /**
     * @example ["11090","2055127460","0","2236","384592","ssrc_2055127460_send","2022-03-15T09:52:08.820Z","1"]
     *
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
