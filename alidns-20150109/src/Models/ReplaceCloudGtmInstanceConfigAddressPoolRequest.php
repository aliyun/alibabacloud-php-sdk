<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\ReplaceCloudGtmInstanceConfigAddressPoolRequest\addressPools;
use AlibabaCloud\Tea\Model;

class ReplaceCloudGtmInstanceConfigAddressPoolRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var addressPools[]
     */
    public $addressPools;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @example gtm-cn-wwo3a3hbz**
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPools'   => 'AddressPools',
        'clientToken'    => 'ClientToken',
        'configId'       => 'ConfigId',
        'instanceId'     => 'InstanceId',
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
        if (null !== $this->addressPools) {
            $res['AddressPools'] = [];
            if (null !== $this->addressPools && \is_array($this->addressPools)) {
                $n = 0;
                foreach ($this->addressPools as $item) {
                    $res['AddressPools'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ReplaceCloudGtmInstanceConfigAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AddressPools'])) {
            if (!empty($map['AddressPools'])) {
                $model->addressPools = [];
                $n                   = 0;
                foreach ($map['AddressPools'] as $item) {
                    $model->addressPools[$n++] = null !== $item ? addressPools::fromMap($item) : $item;
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
