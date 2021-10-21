<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class GetNotaryOrderRequest extends Model
{
    /**
     * @var int
     */
    public $notaryOrderId;
    protected $_name = [
        'notaryOrderId' => 'NotaryOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notaryOrderId) {
            $res['NotaryOrderId'] = $this->notaryOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNotaryOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotaryOrderId'])) {
            $model->notaryOrderId = $map['NotaryOrderId'];
        }

        return $model;
    }
}
