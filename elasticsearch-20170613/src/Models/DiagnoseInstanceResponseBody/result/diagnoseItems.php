<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DiagnoseInstanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class diagnoseItems extends Model
{
    /**
     * @var string
     */
    public $item;
    protected $_name = [
        'item' => 'item',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['item'] = $this->item;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diagnoseItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['item'])) {
            $model->item = $map['item'];
        }

        return $model;
    }
}
