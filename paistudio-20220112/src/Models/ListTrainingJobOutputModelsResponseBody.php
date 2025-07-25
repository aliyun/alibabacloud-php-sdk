<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobOutputModelsResponseBody\outputModels;
use AlibabaCloud\Tea\Model;

class ListTrainingJobOutputModelsResponseBody extends Model
{
    /**
     * @var outputModels[]
     */
    public $outputModels;
    protected $_name = [
        'outputModels' => 'OutputModels',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->outputModels) {
            $res['OutputModels'] = [];
            if (null !== $this->outputModels && \is_array($this->outputModels)) {
                $n = 0;
                foreach ($this->outputModels as $item) {
                    $res['OutputModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrainingJobOutputModelsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutputModels'])) {
            if (!empty($map['OutputModels'])) {
                $model->outputModels = [];
                $n = 0;
                foreach ($map['OutputModels'] as $item) {
                    $model->outputModels[$n++] = null !== $item ? outputModels::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
