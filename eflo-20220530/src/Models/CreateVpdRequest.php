<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\SDK\Eflo\V20220530\Models\CreateVpdRequest\subnets;
use AlibabaCloud\Tea\Model;

class CreateVpdRequest extends Model
{
    /**
     * @example 10.0.0.0/8
     *
     * @var string
     */
    public $cidr;

    /**
     * @example test-vpd-template
     *
     * @var string
     */
    public $name;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @var subnets[]
     */
    public $subnets;
    protected $_name = [
        'cidr'     => 'Cidr',
        'name'     => 'Name',
        'regionId' => 'RegionId',
        'subnets'  => 'Subnets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->subnets) {
            $res['Subnets'] = [];
            if (null !== $this->subnets && \is_array($this->subnets)) {
                $n = 0;
                foreach ($this->subnets as $item) {
                    $res['Subnets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVpdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Subnets'])) {
            if (!empty($map['Subnets'])) {
                $model->subnets = [];
                $n              = 0;
                foreach ($map['Subnets'] as $item) {
                    $model->subnets[$n++] = null !== $item ? subnets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
