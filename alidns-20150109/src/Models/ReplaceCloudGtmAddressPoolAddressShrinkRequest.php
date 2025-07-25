<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ReplaceCloudGtmAddressPoolAddressShrinkRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   **zh-CN**: Chinese
     *   **en-US (default)**: English
     *
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The ID of the address pool for which you want to replace addresses. This ID uniquely identifies the address pool.
     *
     * @example pool-89618921167339**24
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @description The addresses.
     *
     * @var string
     */
    public $addressesShrink;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPoolId' => 'AddressPoolId',
        'addressesShrink' => 'Addresses',
        'clientToken' => 'ClientToken',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->addressesShrink) {
            $res['Addresses'] = $this->addressesShrink;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceCloudGtmAddressPoolAddressShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }
        if (isset($map['Addresses'])) {
            $model->addressesShrink = $map['Addresses'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
