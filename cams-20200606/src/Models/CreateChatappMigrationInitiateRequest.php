<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Tea\Model;

class CreateChatappMigrationInitiateRequest extends Model
{
    /**
     * @description The country code of the phone number.
     *
     * @example 86
     *
     * @var string
     */
    public $countryCode;

    /**
     * @description The space ID of the user under the ISV account.
     *
     * @example 293483938849493****
     *
     * @var string
     */
    public $custSpaceId;

    /**
     * @description The phone number without the country code.
     *
     * @example 13800000000
     *
     * @var string
     */
    public $mobileNumber;
    protected $_name = [
        'countryCode'  => 'CountryCode',
        'custSpaceId'  => 'CustSpaceId',
        'mobileNumber' => 'MobileNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->countryCode) {
            $res['CountryCode'] = $this->countryCode;
        }
        if (null !== $this->custSpaceId) {
            $res['CustSpaceId'] = $this->custSpaceId;
        }
        if (null !== $this->mobileNumber) {
            $res['MobileNumber'] = $this->mobileNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateChatappMigrationInitiateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CountryCode'])) {
            $model->countryCode = $map['CountryCode'];
        }
        if (isset($map['CustSpaceId'])) {
            $model->custSpaceId = $map['CustSpaceId'];
        }
        if (isset($map['MobileNumber'])) {
            $model->mobileNumber = $map['MobileNumber'];
        }

        return $model;
    }
}
