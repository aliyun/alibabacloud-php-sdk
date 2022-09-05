<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models;

use AlibabaCloud\Tea\Model;

class GetBusinessIdRequest extends Model
{
    /**
     * @var string
     */
    public $businessId;
    protected $_name = [
        'businessId' => 'BusinessId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessId) {
            $res['BusinessId'] = $this->businessId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetBusinessIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessId'])) {
            $model->businessId = $map['BusinessId'];
        }

        return $model;
    }
}
