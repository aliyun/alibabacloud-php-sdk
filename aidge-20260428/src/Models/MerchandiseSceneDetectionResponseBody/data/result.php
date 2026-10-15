<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandiseSceneDetectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandiseSceneDetectionResponseBody\data\result\grounding;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandiseSceneDetectionResponseBody\data\result\scenes;

class result extends Model
{
    /**
     * @var grounding
     */
    public $grounding;

    /**
     * @var scenes[]
     */
    public $scenes;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'grounding' => 'Grounding',
        'scenes' => 'Scenes',
        'type' => 'Type',
    ];

    public function validate()
    {
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
        if (null !== $this->grounding) {
            $res['Grounding'] = null !== $this->grounding ? $this->grounding->toArray($noStream) : $this->grounding;
        }

        if (null !== $this->scenes) {
            if (\is_array($this->scenes)) {
                $res['Scenes'] = [];
                $n1 = 0;
                foreach ($this->scenes as $item1) {
                    $res['Scenes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Grounding'])) {
            $model->grounding = grounding::fromMap($map['Grounding']);
        }

        if (isset($map['Scenes'])) {
            if (!empty($map['Scenes'])) {
                $model->scenes = [];
                $n1 = 0;
                foreach ($map['Scenes'] as $item1) {
                    $model->scenes[$n1] = scenes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
