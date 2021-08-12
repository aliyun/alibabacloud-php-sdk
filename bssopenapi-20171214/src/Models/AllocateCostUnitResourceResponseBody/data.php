<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $toUnitUserId;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $toUnitId;
    protected $_name = [
        'toUnitUserId' => 'ToUnitUserId',
        'isSuccess'    => 'IsSuccess',
        'toUnitId'     => 'ToUnitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->toUnitUserId) {
            $res['ToUnitUserId'] = $this->toUnitUserId;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->toUnitId) {
            $res['ToUnitId'] = $this->toUnitId;
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
        if (isset($map['ToUnitUserId'])) {
            $model->toUnitUserId = $map['ToUnitUserId'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ToUnitId'])) {
            $model->toUnitId = $map['ToUnitId'];
        }

        return $model;
    }
}
