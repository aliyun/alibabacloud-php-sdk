<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListStaticsQueryResponse extends Model
{
    /**
     * @var int
     */
    public $length;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var StaticsInfo[]
     */
    public $statics;
    protected $_name = [
        'length' => 'length',
        'sort' => 'sort',
        'statics' => 'statics',
    ];

    public function validate()
    {
        if (\is_array($this->statics)) {
            Model::validateArray($this->statics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->length) {
            $res['length'] = $this->length;
        }

        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }

        if (null !== $this->statics) {
            if (\is_array($this->statics)) {
                $res['statics'] = [];
                $n1 = 0;
                foreach ($this->statics as $item1) {
                    $res['statics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['length'])) {
            $model->length = $map['length'];
        }

        if (isset($map['sort'])) {
            $model->sort = $map['sort'];
        }

        if (isset($map['statics'])) {
            if (!empty($map['statics'])) {
                $model->statics = [];
                $n1 = 0;
                foreach ($map['statics'] as $item1) {
                    $model->statics[$n1++] = StaticsInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
