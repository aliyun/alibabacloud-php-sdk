<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudGtmAddressRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description This parameter is required.
     *
     * @example addr-89518218114368**92
     *
     * @var string
     */
    public $addressId;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressId'      => 'AddressId',
        'clientToken'    => 'ClientToken',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudGtmAddressRequest
     */
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

        return $model;
    }
}
