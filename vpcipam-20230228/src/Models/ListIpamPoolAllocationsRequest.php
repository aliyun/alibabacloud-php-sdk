<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class ListIpamPoolAllocationsRequest extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string[]
     */
    public $ipamPoolAllocationIds;

    /**
     * @var string
     */
    public $ipamPoolAllocationName;

    /**
     * @var string
     */
    public $ipamPoolId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'cidr' => 'Cidr',
        'ipamPoolAllocationIds' => 'IpamPoolAllocationIds',
        'ipamPoolAllocationName' => 'IpamPoolAllocationName',
        'ipamPoolId' => 'IpamPoolId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->ipamPoolAllocationIds)) {
            Model::validateArray($this->ipamPoolAllocationIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->ipamPoolAllocationIds) {
            if (\is_array($this->ipamPoolAllocationIds)) {
                $res['IpamPoolAllocationIds'] = [];
                $n1 = 0;
                foreach ($this->ipamPoolAllocationIds as $item1) {
                    $res['IpamPoolAllocationIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipamPoolAllocationName) {
            $res['IpamPoolAllocationName'] = $this->ipamPoolAllocationName;
        }

        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['IpamPoolAllocationIds'])) {
            if (!empty($map['IpamPoolAllocationIds'])) {
                $model->ipamPoolAllocationIds = [];
                $n1 = 0;
                foreach ($map['IpamPoolAllocationIds'] as $item1) {
                    $model->ipamPoolAllocationIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['IpamPoolAllocationName'])) {
            $model->ipamPoolAllocationName = $map['IpamPoolAllocationName'];
        }

        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
