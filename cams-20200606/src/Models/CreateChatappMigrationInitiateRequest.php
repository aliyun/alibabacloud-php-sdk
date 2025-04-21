<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models;

use AlibabaCloud\Dara\Model;

class CreateChatappMigrationInitiateRequest extends Model
{
    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $custSpaceId;

    /**
     * @var string
     */
    public $mobileNumber;
    protected $_name = [
        'countryCode' => 'CountryCode',
        'custSpaceId' => 'CustSpaceId',
        'mobileNumber' => 'MobileNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
