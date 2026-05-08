<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreatePipelineRequest\sink\dataset;

class sink extends Model
{
    /**
     * @var dataset
     */
    public $dataset;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'dataset' => 'dataset',
        'type' => 'type',
    ];

    public function validate()
    {
        if (null !== $this->dataset) {
            $this->dataset->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataset) {
            $res['dataset'] = null !== $this->dataset ? $this->dataset->toArray($noStream) : $this->dataset;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['dataset'])) {
            $model->dataset = dataset::fromMap($map['dataset']);
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
