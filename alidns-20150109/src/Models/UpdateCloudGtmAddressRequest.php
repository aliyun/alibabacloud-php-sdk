<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmAddressRequest\healthTasks;

class UpdateCloudGtmAddressRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressId;

    /**
     * @var string
     */
    public $attributeInfo;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $healthJudgement;

    /**
     * @var healthTasks[]
     */
    public $healthTasks;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'address' => 'Address',
        'addressId' => 'AddressId',
        'attributeInfo' => 'AttributeInfo',
        'clientToken' => 'ClientToken',
        'healthJudgement' => 'HealthJudgement',
        'healthTasks' => 'HealthTasks',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->healthTasks)) {
            Model::validateArray($this->healthTasks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->healthTasks)) {
                $res['HealthTasks'] = [];
                $n1 = 0;
                foreach ($this->healthTasks as $item1) {
                    $res['HealthTasks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
                $n1 = 0;
                foreach ($map['HealthTasks'] as $item1) {
                    $model->healthTasks[$n1++] = healthTasks::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
