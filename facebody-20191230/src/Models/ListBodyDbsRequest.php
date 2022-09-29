<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class ListBodyDbsRequest extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $offset;
    protected $_name = [
        'limit'  => 'Limit',
        'offset' => 'Offset',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->offset) {
            $res['Offset'] = $this->offset;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBodyDbsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Offset'])) {
            $model->offset = $map['Offset'];
        }

        return $model;
    }
}
