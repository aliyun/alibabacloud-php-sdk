<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models\RunPipelineRequest;

use AlibabaCloud\Dara\Model;

class output extends Model
{
    /**
     * @var bool
     */
    public $dataset;

    /**
     * @var bool
     */
    public $inline;
    protected $_name = [
        'dataset' => 'dataset',
        'inline' => 'inline',
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

        if (null !== $this->inline) {
            $res['inline'] = $this->inline;
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

        if (isset($map['inline'])) {
            $model->inline = $map['inline'];
        }

        return $model;
    }
}
