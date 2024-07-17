<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class DeregisterLocationRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example LOC-AB8FBC17F95A4AF5
     *
     * @var string
     */
    public $locationId;
    protected $_name = [
        'locationId' => 'LocationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locationId) {
            $res['LocationId'] = $this->locationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeregisterLocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LocationId'])) {
            $model->locationId = $map['LocationId'];
        }

        return $model;
    }
}
