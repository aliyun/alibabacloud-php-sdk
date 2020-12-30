<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances\protocolPortConfigs;
use AlibabaCloud\Tea\Model;

class cloudNativeInstances extends Model
{
    /**
     * @var protocolPortConfigs[]
     */
    public $protocolPortConfigs;

    /**
     * @var string
     */
    public $cloudNativeProductName;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $IPAddressList;
    protected $_name = [
        'protocolPortConfigs'    => 'ProtocolPortConfigs',
        'cloudNativeProductName' => 'CloudNativeProductName',
        'instanceId'             => 'InstanceId',
        'IPAddressList'          => 'IPAddressList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->protocolPortConfigs) {
            $res['ProtocolPortConfigs'] = [];
            if (null !== $this->protocolPortConfigs && \is_array($this->protocolPortConfigs)) {
                $n = 0;
                foreach ($this->protocolPortConfigs as $item) {
                    $res['ProtocolPortConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->cloudNativeProductName) {
            $res['CloudNativeProductName'] = $this->cloudNativeProductName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->IPAddressList) {
            $res['IPAddressList'] = $this->IPAddressList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cloudNativeInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProtocolPortConfigs'])) {
            if (!empty($map['ProtocolPortConfigs'])) {
                $model->protocolPortConfigs = [];
                $n                          = 0;
                foreach ($map['ProtocolPortConfigs'] as $item) {
                    $model->protocolPortConfigs[$n++] = null !== $item ? protocolPortConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CloudNativeProductName'])) {
            $model->cloudNativeProductName = $map['CloudNativeProductName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IPAddressList'])) {
            $model->IPAddressList = $map['IPAddressList'];
        }

        return $model;
    }
}
