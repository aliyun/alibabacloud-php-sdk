<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'length'  => 'length',
        'sort'    => 'sort',
        'statics' => 'statics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->length) {
            $res['length'] = $this->length;
        }
        if (null !== $this->sort) {
            $res['sort'] = $this->sort;
        }
        if (null !== $this->statics) {
            $res['statics'] = [];
            if (null !== $this->statics && \is_array($this->statics)) {
                $n = 0;
                foreach ($this->statics as $item) {
                    $res['statics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStaticsQueryResponse
     */
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
                $n              = 0;
                foreach ($map['statics'] as $item) {
                    $model->statics[$n++] = null !== $item ? StaticsInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
