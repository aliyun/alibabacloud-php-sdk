<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetPipelineResponseBody\pipeline\pipelineConfig\sources;
use AlibabaCloud\Tea\Model;

class pipelineConfig extends Model
{
    /**
     * @description 流水线配置信息
     *
     * @var string
     */
    public $flow;

    /**
     * @description 流水线环境变量等
     *
     * @var string
     */
    public $settings;

    /**
     * @description 代码源
     *
     * @var sources[]
     */
    public $sources;
    protected $_name = [
        'flow'     => 'flow',
        'settings' => 'settings',
        'sources'  => 'sources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flow) {
            $res['flow'] = $this->flow;
        }
        if (null !== $this->settings) {
            $res['settings'] = $this->settings;
        }
        if (null !== $this->sources) {
            $res['sources'] = [];
            if (null !== $this->sources && \is_array($this->sources)) {
                $n = 0;
                foreach ($this->sources as $item) {
                    $res['sources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineConfig
     */
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
                $n              = 0;
                foreach ($map['sources'] as $item) {
                    $model->sources[$n++] = null !== $item ? sources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
