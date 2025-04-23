<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolRequest\addressPools;

class ReplaceCloudGtmInstanceConfigAddressPoolRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var addressPools[]
     */
    public $addressPools;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $configId;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPools' => 'AddressPools',
        'clientToken' => 'ClientToken',
        'configId' => 'ConfigId',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->addressPools)) {
            Model::validateArray($this->addressPools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->addressPools) {
            if (\is_array($this->addressPools)) {
                $res['AddressPools'] = [];
                $n1 = 0;
                foreach ($this->addressPools as $item1) {
                    $res['AddressPools'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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

        if (isset($map['AddressPools'])) {
            if (!empty($map['AddressPools'])) {
                $model->addressPools = [];
                $n1 = 0;
                foreach ($map['AddressPools'] as $item1) {
                    $model->addressPools[$n1++] = addressPools::fromMap($item1);
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
