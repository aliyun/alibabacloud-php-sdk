<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetPipelineResponseBody\sink;

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
    public $workspace;
    protected $_name = [
        'dataset' => 'dataset',
        'workspace' => 'workspace',
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

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
