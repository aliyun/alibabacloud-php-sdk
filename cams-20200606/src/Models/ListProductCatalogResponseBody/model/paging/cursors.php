<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListProductCatalogResponseBody\model\paging;

use AlibabaCloud\Tea\Model;

class cursors extends Model
{
    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $after;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $before;
    protected $_name = [
        'after'  => 'After',
        'before' => 'Before',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->after) {
            $res['After'] = $this->after;
        }
        if (null !== $this->before) {
            $res['Before'] = $this->before;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cursors
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['After'])) {
            $model->after = $map['After'];
        }
        if (isset($map['Before'])) {
            $model->before = $map['Before'];
        }

        return $model;
    }
}
