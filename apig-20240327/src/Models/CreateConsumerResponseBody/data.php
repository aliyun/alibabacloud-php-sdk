<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example cs-cvnjramm1hks1r3fmmug
     *
     * @var string
     */
    public $consumerId;
    protected $_name = [
        'consumerId' => 'consumerId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerId) {
            $res['consumerId'] = $this->consumerId;
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
        if (isset($map['consumerId'])) {
            $model->consumerId = $map['consumerId'];
        }

        return $model;
    }
}
