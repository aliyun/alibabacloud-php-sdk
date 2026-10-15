<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\StorefrontSceneRecognitionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\StorefrontSceneRecognitionResponseBody\data\result\details;
use AlibabaCloud\SDK\Aidge\V20260428\Models\StorefrontSceneRecognitionResponseBody\data\result\grounding;

class result extends Model
{
    /**
     * @var details[]
     */
    public $details;

    /**
     * @var grounding
     */
    public $grounding;

    /**
     * @var string[]
     */
    public $scenes;
    protected $_name = [
        'details' => 'Details',
        'grounding' => 'Grounding',
        'scenes' => 'Scenes',
    ];

    public function validate()
    {
        if (\is_array($this->details)) {
            Model::validateArray($this->details);
        }
        if (null !== $this->grounding) {
            $this->grounding->validate();
        }
        if (\is_array($this->scenes)) {
            Model::validateArray($this->scenes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            if (\is_array($this->details)) {
                $res['Details'] = [];
                $n1 = 0;
                foreach ($this->details as $item1) {
                    $res['Details'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->grounding) {
            $res['Grounding'] = null !== $this->grounding ? $this->grounding->toArray($noStream) : $this->grounding;
        }

        if (null !== $this->scenes) {
            if (\is_array($this->scenes)) {
                $res['Scenes'] = [];
                $n1 = 0;
                foreach ($this->scenes as $item1) {
                    $res['Scenes'][$n1] = $item1;
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
        if (isset($map['Details'])) {
            if (!empty($map['Details'])) {
                $model->details = [];
                $n1 = 0;
                foreach ($map['Details'] as $item1) {
                    $model->details[$n1] = details::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Grounding'])) {
            $model->grounding = grounding::fromMap($map['Grounding']);
        }

        if (isset($map['Scenes'])) {
            if (!empty($map['Scenes'])) {
                $model->scenes = [];
                $n1 = 0;
                foreach ($map['Scenes'] as $item1) {
                    $model->scenes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
