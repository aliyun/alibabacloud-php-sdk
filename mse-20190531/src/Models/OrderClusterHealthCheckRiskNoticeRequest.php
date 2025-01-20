<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class OrderClusterHealthCheckRiskNoticeRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var bool
     */
    public $mute;
    /**
     * @var string
     */
    public $noticeType;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $requestPars;
    /**
     * @var string
     */
    public $riskCode;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'instanceId'     => 'InstanceId',
        'mute'           => 'Mute',
        'noticeType'     => 'NoticeType',
        'regionId'       => 'RegionId',
        'requestPars'    => 'RequestPars',
        'riskCode'       => 'RiskCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->mute) {
            $res['Mute'] = $this->mute;
        }

        if (null !== $this->noticeType) {
            $res['NoticeType'] = $this->noticeType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }

        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Mute'])) {
            $model->mute = $map['Mute'];
        }

        if (isset($map['NoticeType'])) {
            $model->noticeType = $map['NoticeType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }

        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }

        return $model;
    }
}
