<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobOutputModelsResponseBody\outputModels;

class ListTrainingJobOutputModelsResponseBody extends Model
{
    /**
     * @var outputModels[]
     */
    public $outputModels;
    protected $_name = [
        'outputModels' => 'OutputModels',
    ];

    public function validate()
    {
        if (\is_array($this->outputModels)) {
            Model::validateArray($this->outputModels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->outputModels) {
            if (\is_array($this->outputModels)) {
                $res['OutputModels'] = [];
                $n1                  = 0;
                foreach ($this->outputModels as $item1) {
                    $res['OutputModels'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['OutputModels'])) {
            if (!empty($map['OutputModels'])) {
                $model->outputModels = [];
                $n1                  = 0;
                foreach ($map['OutputModels'] as $item1) {
                    $model->outputModels[$n1++] = outputModels::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
