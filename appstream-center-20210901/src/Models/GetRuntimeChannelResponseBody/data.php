<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeChannelResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $avatarUrl;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $configMode;

    /**
     * @var string
     */
    public $qrCodeNotifyUrl;

    /**
     * @var string
     */
    public $qrCodeStatus;

    /**
     * @var string
     */
    public $riskType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'avatarUrl' => 'AvatarUrl',
        'code' => 'Code',
        'config' => 'Config',
        'configMode' => 'ConfigMode',
        'qrCodeNotifyUrl' => 'QrCodeNotifyUrl',
        'qrCodeStatus' => 'QrCodeStatus',
        'riskType' => 'RiskType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->avatarUrl) {
            $res['AvatarUrl'] = $this->avatarUrl;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }

        if (null !== $this->configMode) {
            $res['ConfigMode'] = $this->configMode;
        }

        if (null !== $this->qrCodeNotifyUrl) {
            $res['QrCodeNotifyUrl'] = $this->qrCodeNotifyUrl;
        }

        if (null !== $this->qrCodeStatus) {
            $res['QrCodeStatus'] = $this->qrCodeStatus;
        }

        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AvatarUrl'])) {
            $model->avatarUrl = $map['AvatarUrl'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }

        if (isset($map['ConfigMode'])) {
            $model->configMode = $map['ConfigMode'];
        }

        if (isset($map['QrCodeNotifyUrl'])) {
            $model->qrCodeNotifyUrl = $map['QrCodeNotifyUrl'];
        }

        if (isset($map['QrCodeStatus'])) {
            $model->qrCodeStatus = $map['QrCodeStatus'];
        }

        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
