<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\CreateCustomCallTaggingResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1312121****
     *
     * @var string
     */
    public $item;

    /**
     * @example CUSTOM_NUMBER_DUPLICATED
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'item'   => 'Item',
        'reason' => 'Reason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
