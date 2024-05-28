<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmAddressPoolAddressRequest\addresses;
use AlibabaCloud\Tea\Model;

class ReplaceCloudGtmAddressPoolAddressRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example pool-89618921167339**24
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @var addresses[]
     */
    public $addresses;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPoolId'  => 'AddressPoolId',
        'addresses'      => 'Addresses',
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
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->addresses) {
            $res['Addresses'] = [];
            if (null !== $this->addresses && \is_array($this->addresses)) {
                $n = 0;
                foreach ($this->addresses as $item) {
                    $res['Addresses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReplaceCloudGtmAddressPoolAddressRequest
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
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n                = 0;
                foreach ($map['Addresses'] as $item) {
                    $model->addresses[$n++] = null !== $item ? addresses::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
