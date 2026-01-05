<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models\CreateSlotsRequest\slots;

class CreateSlotsRequest extends Model
{
    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var slots[]
     */
    public $slots;
    protected $_name = [
        'dryRun' => 'DryRun',
        'slots' => 'Slots',
    ];

    public function validate()
    {
        if (\is_array($this->slots)) {
            Model::validateArray($this->slots);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->slots) {
            if (\is_array($this->slots)) {
                $res['Slots'] = [];
                $n1 = 0;
                foreach ($this->slots as $item1) {
                    $res['Slots'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['Slots'])) {
            if (!empty($map['Slots'])) {
                $model->slots = [];
                $n1 = 0;
                foreach ($map['Slots'] as $item1) {
                    $model->slots[$n1] = slots::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
