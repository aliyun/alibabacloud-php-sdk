<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesResponseBody\resources\ipAddressAttributes;
use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesResponseBody\resources\tags;

class resources extends Model
{
    /**
     * @var string
     */
    public $accountId;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $expireTime;
    /**
     * @var ipAddressAttributes[]
     */
    public $ipAddressAttributes;
    /**
     * @var string[]
     */
    public $ipAddresses;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $resourceName;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var tags[]
     */
    public $tags;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'accountId'           => 'AccountId',
        'createTime'          => 'CreateTime',
        'expireTime'          => 'ExpireTime',
        'ipAddressAttributes' => 'IpAddressAttributes',
        'ipAddresses'         => 'IpAddresses',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceId'          => 'ResourceId',
        'resourceName'        => 'ResourceName',
        'resourceType'        => 'ResourceType',
        'tags'                => 'Tags',
        'zoneId'              => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->ipAddressAttributes)) {
            Model::validateArray($this->ipAddressAttributes);
        }
        if (\is_array($this->ipAddresses)) {
            Model::validateArray($this->ipAddresses);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }

        if (null !== $this->ipAddressAttributes) {
            if (\is_array($this->ipAddressAttributes)) {
                $res['IpAddressAttributes'] = [];
                $n1                         = 0;
                foreach ($this->ipAddressAttributes as $item1) {
                    $res['IpAddressAttributes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ipAddresses) {
            if (\is_array($this->ipAddresses)) {
                $res['IpAddresses'] = [];
                $n1                 = 0;
                foreach ($this->ipAddresses as $item1) {
                    $res['IpAddresses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }

        if (isset($map['IpAddressAttributes'])) {
            if (!empty($map['IpAddressAttributes'])) {
                $model->ipAddressAttributes = [];
                $n1                         = 0;
                foreach ($map['IpAddressAttributes'] as $item1) {
                    $model->ipAddressAttributes[$n1++] = ipAddressAttributes::fromMap($item1);
                }
            }
        }

        if (isset($map['IpAddresses'])) {
            if (!empty($map['IpAddresses'])) {
                $model->ipAddresses = [];
                $n1                 = 0;
                foreach ($map['IpAddresses'] as $item1) {
                    $model->ipAddresses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
