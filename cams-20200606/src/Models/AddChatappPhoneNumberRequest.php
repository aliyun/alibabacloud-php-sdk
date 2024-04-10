<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class AddChatappPhoneNumberRequest extends Model
{
    /**
     * @description The country code.
     *
     * @example 86
     *
     * @var string
     */
    public $cc;

    /**
     * @description The space ID of the user within the independent software vendor (ISV) account.
     *
     * @example 939283893939
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The phone number without a country code.
     *
     * @example 13800000000
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @description The ID of the pre-registered phone number.
     *
     * @example 10202020
     *
     * @var string
     */
    public $preValidateId;

    /**
     * @description The display name of the phone number.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $verifiedName;
    protected $_name = [
        'cc'            => 'Cc',
        'custSpaceId'   => 'CustSpaceId',
        'phoneNumber'   => 'PhoneNumber',
        'preValidateId' => 'PreValidateId',
        'verifiedName'  => 'VerifiedName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cc) {
            $res['Cc'] = $this->cc;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->preValidateId) {
            $res['PreValidateId'] = $this->preValidateId;
        }
        if (null !== $this->verifiedName) {
            $res['VerifiedName'] = $this->verifiedName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddChatappPhoneNumberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cc'])) {
            $model->cc = $map['Cc'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['PreValidateId'])) {
            $model->preValidateId = $map['PreValidateId'];
        }
        if (isset($map['VerifiedName'])) {
            $model->verifiedName = $map['VerifiedName'];
        }

        return $model;
    }
}
