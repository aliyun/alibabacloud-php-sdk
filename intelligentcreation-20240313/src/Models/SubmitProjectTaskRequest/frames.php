<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\layers;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\subtitle;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\videoScript;
use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @var layers[]
     */
    public $layers;

    /**
     * @var subtitle
     */
    public $subtitle;

    /**
     * @var videoScript
     */
    public $videoScript;
    protected $_name = [
        'index'       => 'index',
        'layers'      => 'layers',
        'subtitle'    => 'subtitle',
        'videoScript' => 'videoScript',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->layers) {
            $res['layers'] = [];
            if (null !== $this->layers && \is_array($this->layers)) {
                $n = 0;
                foreach ($this->layers as $item) {
                    $res['layers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subtitle) {
            $res['subtitle'] = null !== $this->subtitle ? $this->subtitle->toMap() : null;
        }
        if (null !== $this->videoScript) {
            $res['videoScript'] = null !== $this->videoScript ? $this->videoScript->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return frames
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = [];
                $n             = 0;
                foreach ($map['layers'] as $item) {
                    $model->layers[$n++] = null !== $item ? layers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['subtitle'])) {
            $model->subtitle = subtitle::fromMap($map['subtitle']);
        }
        if (isset($map['videoScript'])) {
            $model->videoScript = videoScript::fromMap($map['videoScript']);
        }

        return $model;
    }
}
