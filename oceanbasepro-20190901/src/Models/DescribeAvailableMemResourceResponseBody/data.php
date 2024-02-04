<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableMemResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The maximum memory size for each resource unit, in GB.
     *
     * @example 10
     *
     * @var int
     */
    public $maxMem;

    /**
     * @description The minimum memory size required for each resource unit, in GB.
     *
     * @example 5
     *
     * @var int
     */
    public $minMem;

    /**
     * @description The maximum allowed memory usage, in GB.
     *
     * @example 10.0
     *
     * @var string
     */
    public $safeMem;

    /**
     * @description The number of resource units in the tenant.
     *
     * @example 2
     *
     * @var int
     */
    public $usedMem;
    protected $_name = [
        'maxMem'  => 'MaxMem',
        'minMem'  => 'MinMem',
        'safeMem' => 'SafeMem',
        'usedMem' => 'UsedMem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxMem) {
            $res['MaxMem'] = $this->maxMem;
        }
        if (null !== $this->minMem) {
            $res['MinMem'] = $this->minMem;
        }
        if (null !== $this->safeMem) {
            $res['SafeMem'] = $this->safeMem;
        }
        if (null !== $this->usedMem) {
            $res['UsedMem'] = $this->usedMem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxMem'])) {
            $model->maxMem = $map['MaxMem'];
        }
        if (isset($map['MinMem'])) {
            $model->minMem = $map['MinMem'];
        }
        if (isset($map['SafeMem'])) {
            $model->safeMem = $map['SafeMem'];
        }
        if (isset($map['UsedMem'])) {
            $model->usedMem = $map['UsedMem'];
        }

        return $model;
    }
}
