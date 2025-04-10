<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\GetAICoachCheatDetectionResponseBody\imageCheat\list_;

class imageCheat extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var list_[]
     */
    public $list;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'desc' => 'desc',
        'list' => 'list',
        'status' => 'status',
    ];

    public function validate()
    {
        if (\is_array($this->list)) {
            Model::validateArray($this->list);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->list) {
            if (\is_array($this->list)) {
                $res['list'] = [];
                $n1 = 0;
                foreach ($this->list as $item1) {
                    $res['list'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['list'])) {
            if (!empty($map['list'])) {
                $model->list = [];
                $n1 = 0;
                foreach ($map['list'] as $item1) {
                    $model->list[$n1++] = list_::fromMap($item1);
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
