<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeAvailableMemResourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $maxMem;

    /**
     * @var int
     */
    public $minMem;

    /**
     * @var string
     */
    public $safeMem;

    /**
     * @var int
     */
    public $usedMem;
    protected $_name = [
        'maxMem' => 'MaxMem',
        'minMem' => 'MinMem',
        'safeMem' => 'SafeMem',
        'usedMem' => 'UsedMem',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
