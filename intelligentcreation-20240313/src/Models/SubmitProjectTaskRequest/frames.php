<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\layers;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\subtitle;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\SubmitProjectTaskRequest\frames\videoScript;

class frames extends Model
{
    /**
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
        'index' => 'index',
        'layers' => 'layers',
        'subtitle' => 'subtitle',
        'videoScript' => 'videoScript',
    ];

    public function validate()
    {
        if (\is_array($this->layers)) {
            Model::validateArray($this->layers);
        }
        if (null !== $this->subtitle) {
            $this->subtitle->validate();
        }
        if (null !== $this->videoScript) {
            $this->videoScript->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->layers) {
            if (\is_array($this->layers)) {
                $res['layers'] = [];
                $n1 = 0;
                foreach ($this->layers as $item1) {
                    $res['layers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subtitle) {
            $res['subtitle'] = null !== $this->subtitle ? $this->subtitle->toArray($noStream) : $this->subtitle;
        }

        if (null !== $this->videoScript) {
            $res['videoScript'] = null !== $this->videoScript ? $this->videoScript->toArray($noStream) : $this->videoScript;
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
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['layers'])) {
            if (!empty($map['layers'])) {
                $model->layers = [];
                $n1 = 0;
                foreach ($map['layers'] as $item1) {
                    $model->layers[$n1] = layers::fromMap($item1);
                    ++$n1;
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
