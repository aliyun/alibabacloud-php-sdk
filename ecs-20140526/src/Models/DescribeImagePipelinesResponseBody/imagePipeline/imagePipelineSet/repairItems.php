<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagePipelinesResponseBody\imagePipeline\imagePipelineSet;

use AlibabaCloud\Dara\Model;

class repairItems extends Model
{
    /**
     * @var string[]
     */
    public $repairItem;
    protected $_name = [
        'repairItem' => 'RepairItem',
    ];

    public function validate()
    {
        if (\is_array($this->repairItem)) {
            Model::validateArray($this->repairItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->repairItem) {
            if (\is_array($this->repairItem)) {
                $res['RepairItem'] = [];
                $n1 = 0;
                foreach ($this->repairItem as $item1) {
                    $res['RepairItem'][$n1] = $item1;
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
        if (isset($map['RepairItem'])) {
            if (!empty($map['RepairItem'])) {
                $model->repairItem = [];
                $n1 = 0;
                foreach ($map['RepairItem'] as $item1) {
                    $model->repairItem[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
