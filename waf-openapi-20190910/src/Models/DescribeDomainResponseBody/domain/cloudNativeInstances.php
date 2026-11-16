<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20190910\Models\DescribeDomainResponseBody\domain\cloudNativeInstances\protocolPortConfigs;

class cloudNativeInstances extends Model
{
    /**
     * @var string
     */
    public $cloudNativeProductName;

    /**
     * @var string[]
     */
    public $IPAddressList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var protocolPortConfigs[]
     */
    public $protocolPortConfigs;

    /**
     * @var string
     */
    public $redirectionTypeName;
    protected $_name = [
        'cloudNativeProductName' => 'CloudNativeProductName',
        'IPAddressList' => 'IPAddressList',
        'instanceId' => 'InstanceId',
        'protocolPortConfigs' => 'ProtocolPortConfigs',
        'redirectionTypeName' => 'RedirectionTypeName',
    ];

    public function validate()
    {
        if (\is_array($this->IPAddressList)) {
            Model::validateArray($this->IPAddressList);
        }
        if (\is_array($this->protocolPortConfigs)) {
            Model::validateArray($this->protocolPortConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudNativeProductName) {
            $res['CloudNativeProductName'] = $this->cloudNativeProductName;
        }

        if (null !== $this->IPAddressList) {
            if (\is_array($this->IPAddressList)) {
                $res['IPAddressList'] = [];
                $n1 = 0;
                foreach ($this->IPAddressList as $item1) {
                    $res['IPAddressList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->protocolPortConfigs) {
            if (\is_array($this->protocolPortConfigs)) {
                $res['ProtocolPortConfigs'] = [];
                $n1 = 0;
                foreach ($this->protocolPortConfigs as $item1) {
                    $res['ProtocolPortConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->redirectionTypeName) {
            $res['RedirectionTypeName'] = $this->redirectionTypeName;
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
        if (isset($map['CloudNativeProductName'])) {
            $model->cloudNativeProductName = $map['CloudNativeProductName'];
        }

        if (isset($map['IPAddressList'])) {
            if (!empty($map['IPAddressList'])) {
                $model->IPAddressList = [];
                $n1 = 0;
                foreach ($map['IPAddressList'] as $item1) {
                    $model->IPAddressList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['ProtocolPortConfigs'])) {
            if (!empty($map['ProtocolPortConfigs'])) {
                $model->protocolPortConfigs = [];
                $n1 = 0;
                foreach ($map['ProtocolPortConfigs'] as $item1) {
                    $model->protocolPortConfigs[$n1] = protocolPortConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RedirectionTypeName'])) {
            $model->redirectionTypeName = $map['RedirectionTypeName'];
        }

        return $model;
    }
}
