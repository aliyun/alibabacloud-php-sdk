<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\CreateIncidentSubtotalResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 123
     *
     * @var int
     */
    public $subtotalId;
    protected $_name = [
        'subtotalId' => 'subtotalId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subtotalId) {
            $res['subtotalId'] = $this->subtotalId;
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
        if (isset($map['subtotalId'])) {
            $model->subtotalId = $map['subtotalId'];
        }

        return $model;
    }
}
