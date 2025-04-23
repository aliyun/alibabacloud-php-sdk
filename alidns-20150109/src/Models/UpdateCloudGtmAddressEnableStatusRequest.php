<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateCloudGtmAddressEnableStatusRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $addressId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $enableStatus;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressId' => 'AddressId',
        'clientToken' => 'ClientToken',
        'enableStatus' => 'EnableStatus',
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

        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
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

        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        return $model;
    }
}
