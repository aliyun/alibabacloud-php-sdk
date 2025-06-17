<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest\subnets;
use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest\tag;

class CreateVpdRequest extends Model
{
    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var subnets[]
     */
    public $subnets;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vpdName;
    protected $_name = [
        'cidr' => 'Cidr',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'subnets' => 'Subnets',
        'tag' => 'Tag',
        'vpdName' => 'VpdName',
    ];

    public function validate()
    {
        if (\is_array($this->subnets)) {
            Model::validateArray($this->subnets);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->subnets) {
            if (\is_array($this->subnets)) {
                $res['Subnets'] = [];
                $n1 = 0;
                foreach ($this->subnets as $item1) {
                    $res['Subnets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpdName) {
            $res['VpdName'] = $this->vpdName;
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Subnets'])) {
            if (!empty($map['Subnets'])) {
                $model->subnets = [];
                $n1 = 0;
                foreach ($map['Subnets'] as $item1) {
                    $model->subnets[$n1] = subnets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpdName'])) {
            $model->vpdName = $map['VpdName'];
        }

        return $model;
    }
}
