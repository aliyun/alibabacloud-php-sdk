<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmAddressPoolAddressRequest\addresses;

class ReplaceCloudGtmAddressPoolAddressRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $addressPoolId;

    /**
     * @var addresses[]
     */
    public $addresses;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPoolId' => 'AddressPoolId',
        'addresses' => 'Addresses',
        'clientToken' => 'ClientToken',
    ];

    public function validate()
    {
        if (\is_array($this->addresses)) {
            Model::validateArray($this->addresses);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }

        if (null !== $this->addresses) {
            if (\is_array($this->addresses)) {
                $res['Addresses'] = [];
                $n1 = 0;
                foreach ($this->addresses as $item1) {
                    $res['Addresses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
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

        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }

        if (isset($map['Addresses'])) {
            if (!empty($map['Addresses'])) {
                $model->addresses = [];
                $n1 = 0;
                foreach ($map['Addresses'] as $item1) {
                    $model->addresses[$n1++] = addresses::fromMap($item1);
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
