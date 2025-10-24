<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetQuotaUsageResponseBody\data;

use AlibabaCloud\Dara\Model;

class plot extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $yAxis;
    protected $_name = [
        'title' => 'title',
        'type' => 'type',
        'yAxis' => 'yAxis',
    ];

    public function validate()
    {
        if (\is_array($this->yAxis)) {
            Model::validateArray($this->yAxis);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->yAxis) {
            if (\is_array($this->yAxis)) {
                $res['yAxis'] = [];
                $n1 = 0;
                foreach ($this->yAxis as $item1) {
                    $res['yAxis'][$n1] = $item1;
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
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['yAxis'])) {
            if (!empty($map['yAxis'])) {
                $model->yAxis = [];
                $n1 = 0;
                foreach ($map['yAxis'] as $item1) {
                    $model->yAxis[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
