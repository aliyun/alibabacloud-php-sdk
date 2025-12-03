<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig\sources;

class pipelineConfig extends Model
{
    /**
     * @var string
     */
    public $flow;

    /**
     * @var string
     */
    public $settings;

    /**
     * @var sources[]
     */
    public $sources;
    protected $_name = [
        'flow' => 'flow',
        'settings' => 'settings',
        'sources' => 'sources',
    ];

    public function validate()
    {
        if (\is_array($this->sources)) {
            Model::validateArray($this->sources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flow) {
            $res['flow'] = $this->flow;
        }

        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }

        if (null !== $this->sources) {
            if (\is_array($this->sources)) {
                $res['sources'] = [];
                $n1 = 0;
                foreach ($this->sources as $item1) {
                    $res['sources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['flow'])) {
            $model->flow = $map['flow'];
        }

        if (isset($map['settings'])) {
            $model->settings = $map['settings'];
        }

        if (isset($map['sources'])) {
            if (!empty($map['sources'])) {
                $model->sources = [];
                $n1 = 0;
                foreach ($map['sources'] as $item1) {
                    $model->sources[$n1] = sources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
