<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain;

use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances\protocolPortConfigs;
use AlibabaCloud\Tea\Model;

class cloudNativeInstances extends Model
{
    /**
     * @example ALB
     *
     * @var string
     */
    public $cloudNativeProductName;

    /**
     * @example ["39.XX.XX.197"]
     *
     * @var string[]
     */
    public $IPAddressList;

    /**
     * @example alb-s65nua68wdedsp****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var protocolPortConfigs[]
     */
    public $protocolPortConfigs;

    /**
     * @example ALB
     *
     * @var string
     */
    public $redirectionTypeName;
    protected $_name = [
        'cloudNativeProductName' => 'CloudNativeProductName',
        'IPAddressList'          => 'IPAddressList',
        'instanceId'             => 'InstanceId',
        'protocolPortConfigs'    => 'ProtocolPortConfigs',
        'redirectionTypeName'    => 'RedirectionTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cloudNativeProductName) {
            $res['CloudNativeProductName'] = $this->cloudNativeProductName;
        }
        if (null !== $this->IPAddressList) {
            $res['IPAddressList'] = $this->IPAddressList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocolPortConfigs) {
            $res['ProtocolPortConfigs'] = [];
            if (null !== $this->protocolPortConfigs && \is_array($this->protocolPortConfigs)) {
                $n = 0;
                foreach ($this->protocolPortConfigs as $item) {
                    $res['ProtocolPortConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->redirectionTypeName) {
            $res['RedirectionTypeName'] = $this->redirectionTypeName;
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
        if (isset($map['CloudNativeProductName'])) {
            $model->cloudNativeProductName = $map['CloudNativeProductName'];
        }
        if (isset($map['IPAddressList'])) {
            if (!empty($map['IPAddressList'])) {
                $model->IPAddressList = $map['IPAddressList'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProtocolPortConfigs'])) {
            if (!empty($map['ProtocolPortConfigs'])) {
                $model->protocolPortConfigs = [];
                $n                          = 0;
                foreach ($map['ProtocolPortConfigs'] as $item) {
                    $model->protocolPortConfigs[$n++] = null !== $item ? protocolPortConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RedirectionTypeName'])) {
            $model->redirectionTypeName = $map['RedirectionTypeName'];
        }

        return $model;
    }
}
