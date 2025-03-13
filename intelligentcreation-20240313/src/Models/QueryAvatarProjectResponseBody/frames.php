<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponseBody;

use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponseBody\frames\layers;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\QueryAvatarProjectResponseBody\frames\videoScript;
use AlibabaCloud\Tea\Model;

class frames extends Model
{
    /**
     * @var layers[]
     */
    public $layers;

    /**
     * @var videoScript
     */
    public $videoScript;
    protected $_name = [
        'layers'      => 'layers',
        'videoScript' => 'videoScript',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->layers) {
            $res['layers'] = [];
            if (null !== $this->layers && \is_array($this->layers)) {
                $n = 0;
                foreach ($this->layers as $item) {
                    $res['layers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = [];
                $n             = 0;
                foreach ($map['layers'] as $item) {
                    $model->layers[$n++] = null !== $item ? layers::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['videoScript'])) {
            $model->videoScript = videoScript::fromMap($map['videoScript']);
        }

        return $model;
    }
}
