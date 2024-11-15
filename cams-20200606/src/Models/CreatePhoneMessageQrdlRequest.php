<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreatePhoneMessageQrdlRequest extends Model
{
    /**
     * @description The space ID of the RAM user within the independent software vendor (ISV) account.
     *
     * @example 838833
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description Produce QR code image format.
     *
     * This parameter is required.
     * @example PNG
     *
     * @var string
     */
    public $generateQrImage;

    /**
     * @description The phone number. Add the country code before the phone number.
     *
     * This parameter is required.
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description Message content.
     *
     * This parameter is required.
     * @example Hello
     *
     * @var string
     */
    public $prefilledMessage;
    protected $_name = [
        'custSpaceId'      => 'CustSpaceId',
        'generateQrImage'  => 'GenerateQrImage',
        'phoneNumber'      => 'PhoneNumber',
        'prefilledMessage' => 'PrefilledMessage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePhoneMessageQrdlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
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

        return $model;
    }
}
