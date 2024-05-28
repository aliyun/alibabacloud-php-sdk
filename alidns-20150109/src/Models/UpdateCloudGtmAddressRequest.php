<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressRequest\healthTasks;
use AlibabaCloud\Tea\Model;

class UpdateCloudGtmAddressRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example 223.5.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description This parameter is required.
     *
     * @example addr-89518218114368**92
     *
     * @var string
     */
    public $addressId;

    /**
     * @var string
     */
    public $attributeInfo;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example p50_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @var healthTasks[]
     */
    public $healthTasks;

    /**
     * @example Address-1
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'address'         => 'Address',
        'addressId'       => 'AddressId',
        'attributeInfo'   => 'AttributeInfo',
        'clientToken'     => 'ClientToken',
        'healthJudgement' => 'HealthJudgement',
        'healthTasks'     => 'HealthTasks',
        'name'            => 'Name',
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
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = $this->attributeInfo;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->healthTasks) {
            $res['HealthTasks'] = [];
            if (null !== $this->healthTasks && \is_array($this->healthTasks)) {
                $n = 0;
                foreach ($this->healthTasks as $item) {
                    $res['HealthTasks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmAddressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = $map['AttributeInfo'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['HealthTasks'])) {
            if (!empty($map['HealthTasks'])) {
                $model->healthTasks = [];
                $n                  = 0;
                foreach ($map['HealthTasks'] as $item) {
                    $model->healthTasks[$n++] = null !== $item ? healthTasks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
