<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneMessageQrdlResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $deepLinkUrl;

    /**
     * @var string
     */
    public $generateQrImage;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $prefilledMessage;

    /**
     * @var string
     */
    public $qrImageUrl;

    /**
     * @var string
     */
    public $qrdlCode;
    protected $_name = [
        'deepLinkUrl' => 'DeepLinkUrl',
        'generateQrImage' => 'GenerateQrImage',
        'phoneNumber' => 'PhoneNumber',
        'prefilledMessage' => 'PrefilledMessage',
        'qrImageUrl' => 'QrImageUrl',
        'qrdlCode' => 'QrdlCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deepLinkUrl) {
            $res['DeepLinkUrl'] = $this->deepLinkUrl;
        }

        if (null !== $this->generateQrImage) {
            $res['GenerateQrImage'] = $this->generateQrImage;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->prefilledMessage) {
            $res['PrefilledMessage'] = $this->prefilledMessage;
        }

        if (null !== $this->qrImageUrl) {
            $res['QrImageUrl'] = $this->qrImageUrl;
        }

        if (null !== $this->qrdlCode) {
            $res['QrdlCode'] = $this->qrdlCode;
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
        if (isset($map['DeepLinkUrl'])) {
            $model->deepLinkUrl = $map['DeepLinkUrl'];
        }

        if (isset($map['GenerateQrImage'])) {
            $model->generateQrImage = $map['GenerateQrImage'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['PrefilledMessage'])) {
            $model->prefilledMessage = $map['PrefilledMessage'];
        }

        if (isset($map['QrImageUrl'])) {
            $model->qrImageUrl = $map['QrImageUrl'];
        }

        if (isset($map['QrdlCode'])) {
            $model->qrdlCode = $map['QrdlCode'];
        }

        return $model;
    }
}
