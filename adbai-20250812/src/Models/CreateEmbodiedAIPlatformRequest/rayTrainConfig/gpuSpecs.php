<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\CreateEmbodiedAIPlatformRequest\rayTrainConfig;

use AlibabaCloud\Dara\Model;

class gpuSpecs extends Model
{
    /**
     * @var string
     */
    public $allocateUnit;

    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $specName;
    protected $_name = [
        'allocateUnit' => 'AllocateUnit',
        'count' => 'Count',
        'specName' => 'SpecName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocateUnit) {
            $res['AllocateUnit'] = $this->allocateUnit;
        }

        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->specName) {
            $res['SpecName'] = $this->specName;
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
        if (isset($map['AllocateUnit'])) {
            $model->allocateUnit = $map['AllocateUnit'];
        }

        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        if (isset($map['SpecName'])) {
            $model->specName = $map['SpecName'];
        }

        return $model;
    }
}
