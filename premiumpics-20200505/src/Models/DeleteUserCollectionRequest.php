<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class DeleteUserCollectionRequest extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $unitId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'bizType' => 'BizType',
        'unitId'  => 'UnitId',
        'userId'  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserCollectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
