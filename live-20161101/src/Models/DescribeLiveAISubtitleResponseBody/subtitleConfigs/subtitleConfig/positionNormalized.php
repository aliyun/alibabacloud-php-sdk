<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveAISubtitleResponseBody\subtitleConfigs\subtitleConfig;

use AlibabaCloud\Dara\Model;

class positionNormalized extends Model
{
    /**
     * @var float[]
     */
    public $position;
    protected $_name = [
        'position' => 'Position',
    ];

    public function validate()
    {
        if (\is_array($this->position)) {
            Model::validateArray($this->position);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->position) {
            if (\is_array($this->position)) {
                $res['Position'] = [];
                $n1 = 0;
                foreach ($this->position as $item1) {
                    $res['Position'][$n1] = $item1;
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
        if (isset($map['Position'])) {
            if (!empty($map['Position'])) {
                $model->position = [];
                $n1 = 0;
                foreach ($map['Position'] as $item1) {
                    $model->position[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
