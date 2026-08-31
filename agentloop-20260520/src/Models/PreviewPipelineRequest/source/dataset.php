<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\PreviewPipelineRequest\source;

use AlibabaCloud\Dara\Model;

class dataset extends Model
{
    /**
     * @var string
     */
    public $dataset;

    /**
     * @var string
     */
    public $filter;
    protected $_name = [
        'dataset' => 'dataset',
        'filter' => 'filter',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataset) {
            $res['dataset'] = $this->dataset;
        }

        if (null !== $this->filter) {
            $res['filter'] = $this->filter;
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
            $model->dataset = $map['dataset'];
        }

        if (isset($map['filter'])) {
            $model->filter = $map['filter'];
        }

        return $model;
    }
}
