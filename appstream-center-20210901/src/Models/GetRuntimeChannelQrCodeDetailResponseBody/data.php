<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\GetRuntimeChannelQrCodeDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $qrCode;

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
    public $status;
    protected $_name = [
        'qrCode' => 'QrCode',
        'qrCodeNotifyUrl' => 'QrCodeNotifyUrl',
        'qrCodeStatus' => 'QrCodeStatus',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->qrCode) {
            $res['QrCode'] = $this->qrCode;
        }

        if (null !== $this->qrCodeNotifyUrl) {
            $res['QrCodeNotifyUrl'] = $this->qrCodeNotifyUrl;
        }

        if (null !== $this->qrCodeStatus) {
            $res['QrCodeStatus'] = $this->qrCodeStatus;
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
        if (isset($map['QrCode'])) {
            $model->qrCode = $map['QrCode'];
        }

        if (isset($map['QrCodeNotifyUrl'])) {
            $model->qrCodeNotifyUrl = $map['QrCodeNotifyUrl'];
        }

        if (isset($map['QrCodeStatus'])) {
            $model->qrCodeStatus = $map['QrCodeStatus'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
