<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ListFlowControlTaskInvalidItemsResponseBody\result;

use AlibabaCloud\Tea\Model;

class invalidItems extends Model
{
    /**
     * @example 287723
     *
     * @var string
     */
    public $itemId;

    /**
     * @example video
     *
     * @var string
     */
    public $itemType;
    protected $_name = [
        'itemId'   => 'itemId',
        'itemType' => 'itemType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return invalidItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        return $model;
    }
}
