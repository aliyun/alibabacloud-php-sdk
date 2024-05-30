<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class UpdatePhoneMessageQrdlRequest extends Model
{
    /**
     * @example 9383884
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description This parameter is required.
     *
     * @example PNG
     *
     * @var string
     */
    public $generateQrImage;

    /**
     * @description This parameter is required.
     *
     * @example 861380000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description This parameter is required.
     *
     * @example Hello
     *
     * @var string
     */
    public $prefilledMessage;

    /**
     * @description This parameter is required.
     *
     * @example 29338838
     *
     * @var string
     */
    public $qrdlCode;
    protected $_name = [
        'custSpaceId'      => 'CustSpaceId',
        'generateQrImage'  => 'GenerateQrImage',
        'phoneNumber'      => 'PhoneNumber',
        'prefilledMessage' => 'PrefilledMessage',
        'qrdlCode'         => 'QrdlCode',
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
        if (null !== $this->qrdlCode) {
            $res['QrdlCode'] = $this->qrdlCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePhoneMessageQrdlRequest
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
        if (isset($map['QrdlCode'])) {
            $model->qrdlCode = $map['QrdlCode'];
        }

        return $model;
    }
}
