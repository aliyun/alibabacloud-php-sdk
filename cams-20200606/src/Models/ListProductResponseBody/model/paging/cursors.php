<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListProductResponseBody\model\paging;

use AlibabaCloud\Tea\Model;

class cursors extends Model
{
    /**
     * @description The cursor that points to the end of the page of the returned data.
     *
     * @example sjsuueu83838
     *
     * @var string
     */
    public $after;

    /**
     * @description The cursor that points to the beginning of the page of the returned data.
     *
     * @example sjjsjdjjdjd83883
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
