<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\UpdatePhoneMessageQrdlResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Deep link address.
     *
     * @example https://wa.msg/
     *
     * @var string
     */
    public $deepLinkUrl;

    /**
     * @description Generate image types.
     *
     * @example PNG
     *
     * @var string
     */
    public $generateQrImage;

    /**
     * @description Number.
     *
     * @example 8613800
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Message content.
     *
     * @example Hello
     *
     * @var string
     */
    public $prefilledMessage;

    /**
     * @description QR code address.
     *
     * @example https://img.png
     *
     * @var string
     */
    public $qrImageUrl;

    /**
     * @description QR code encoding.
     *
     * @example DEDEE998
     *
     * @var string
     */
    public $qrdlCode;
    protected $_name = [
        'deepLinkUrl'      => 'DeepLinkUrl',
        'generateQrImage'  => 'GenerateQrImage',
        'phoneNumber'      => 'PhoneNumber',
        'prefilledMessage' => 'PrefilledMessage',
        'qrImageUrl'       => 'QrImageUrl',
        'qrdlCode'         => 'QrdlCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
