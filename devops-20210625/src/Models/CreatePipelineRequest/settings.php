<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest\settings\caches;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreatePipelineRequest\settings\globalParams;
use AlibabaCloud\Tea\Model;

class settings extends Model
{
    /**
     * @var caches[]
     */
    public $caches;

    /**
     * @var globalParams[]
     */
    public $globalParams;

    /**
     * @var string
     */
    public $runnerCacheMode;
    protected $_name = [
        'caches'          => 'caches',
        'globalParams'    => 'globalParams',
        'runnerCacheMode' => 'runnerCacheMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caches) {
            $res['caches'] = [];
            if (null !== $this->caches && \is_array($this->caches)) {
                $n = 0;
                foreach ($this->caches as $item) {
                    $res['caches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->globalParams) {
            $res['globalParams'] = [];
            if (null !== $this->globalParams && \is_array($this->globalParams)) {
                $n = 0;
                foreach ($this->globalParams as $item) {
                    $res['globalParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->runnerCacheMode) {
            $res['runnerCacheMode'] = $this->runnerCacheMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return settings
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['caches'])) {
            if (!empty($map['caches'])) {
                $model->caches = [];
                $n             = 0;
                foreach ($map['caches'] as $item) {
                    $model->caches[$n++] = null !== $item ? caches::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['globalParams'])) {
            if (!empty($map['globalParams'])) {
                $model->globalParams = [];
                $n                   = 0;
                foreach ($map['globalParams'] as $item) {
                    $model->globalParams[$n++] = null !== $item ? globalParams::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['runnerCacheMode'])) {
            $model->runnerCacheMode = $map['runnerCacheMode'];
        }

        return $model;
    }
}
