<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyiotapi\V20171111\Models\QueryCardInfoResponseBody;

use AlibabaCloud\Tea\Model;

class cardInfo extends Model
{
    /**
     * @var string
     */
    public $imsi;

    /**
     * @var string
     */
    public $msisdn;

    /**
     * @var string
     */
    public $gprsStatus;

    /**
     * @var string
     */
    public $voiceStatus;

    /**
     * @var string
     */
    public $smsStatus;

    /**
     * @var string
     */
    public $iccid;

    /**
     * @var string
     */
    public $firstActiveTime;

    /**
     * @var string
     */
    public $openTime;
    protected $_name = [
        'imsi'            => 'Imsi',
        'msisdn'          => 'Msisdn',
        'gprsStatus'      => 'GprsStatus',
        'voiceStatus'     => 'VoiceStatus',
        'smsStatus'       => 'SmsStatus',
        'iccid'           => 'Iccid',
        'firstActiveTime' => 'FirstActiveTime',
        'openTime'        => 'OpenTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imsi) {
            $res['Imsi'] = $this->imsi;
        }
        if (null !== $this->msisdn) {
            $res['Msisdn'] = $this->msisdn;
        }
        if (null !== $this->gprsStatus) {
            $res['GprsStatus'] = $this->gprsStatus;
        }
        if (null !== $this->voiceStatus) {
            $res['VoiceStatus'] = $this->voiceStatus;
        }
        if (null !== $this->smsStatus) {
            $res['SmsStatus'] = $this->smsStatus;
        }
        if (null !== $this->iccid) {
            $res['Iccid'] = $this->iccid;
        }
        if (null !== $this->firstActiveTime) {
            $res['FirstActiveTime'] = $this->firstActiveTime;
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cardInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Imsi'])) {
            $model->imsi = $map['Imsi'];
        }
        if (isset($map['Msisdn'])) {
            $model->msisdn = $map['Msisdn'];
        }
        if (isset($map['GprsStatus'])) {
            $model->gprsStatus = $map['GprsStatus'];
        }
        if (isset($map['VoiceStatus'])) {
            $model->voiceStatus = $map['VoiceStatus'];
        }
        if (isset($map['SmsStatus'])) {
            $model->smsStatus = $map['SmsStatus'];
        }
        if (isset($map['Iccid'])) {
            $model->iccid = $map['Iccid'];
        }
        if (isset($map['FirstActiveTime'])) {
            $model->firstActiveTime = $map['FirstActiveTime'];
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }

        return $model;
    }
}
