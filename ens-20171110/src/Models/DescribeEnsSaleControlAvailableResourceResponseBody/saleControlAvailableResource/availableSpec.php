<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlAvailableResourceResponseBody\saleControlAvailableResource;

use AlibabaCloud\Tea\Model;

class availableSpec extends Model
{
    /**
     * @var string
     */
    public $cores;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $specName;

    /**
     * @var string
     */
    public $specValue;
    protected $_name = [
        'cores'     => 'Cores',
        'memory'    => 'Memory',
        'specName'  => 'SpecName',
        'specValue' => 'SpecValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
        }
        if (null !== $this->specValue) {
            $res['SpecValue'] = $this->specValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return availableSpec
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }
        if (isset($map['SpecValue'])) {
            $model->specValue = $map['SpecValue'];
        }

        return $model;
    }
}
