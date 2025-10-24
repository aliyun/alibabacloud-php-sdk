<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryPipelineListResponseBody\pipelineList\pipeline;

class pipelineList extends Model
{
    /**
     * @var pipeline[]
     */
    public $pipeline;
    protected $_name = [
        'pipeline' => 'Pipeline',
    ];

    public function validate()
    {
        if (\is_array($this->pipeline)) {
            Model::validateArray($this->pipeline);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pipeline) {
            if (\is_array($this->pipeline)) {
                $res['Pipeline'] = [];
                $n1 = 0;
                foreach ($this->pipeline as $item1) {
                    $res['Pipeline'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Pipeline'])) {
            if (!empty($map['Pipeline'])) {
                $model->pipeline = [];
                $n1 = 0;
                foreach ($map['Pipeline'] as $item1) {
                    $model->pipeline[$n1] = pipeline::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
