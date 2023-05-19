<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description Indicates whether resources are allocated to the specified cost center. Valid values:
     *
     *   true: The resources are allocated to the specified cost center.
     *   false: The resources fail to be allocated to the specified cost center.
     *
     * @example true
     *
     * @var bool
     */
    public $isSuccess;

    /**
     * @description The ID of the destination cost center.
     *
     * @example 32857346527
     *
     * @var int
     */
    public $toUnitId;

    /**
     * @description The user ID of the owner of the destination cost center.
     *
     * @example 34857693874
     *
     * @var int
     */
    public $toUnitUserId;
    protected $_name = [
        'isSuccess'    => 'IsSuccess',
        'toUnitId'     => 'ToUnitId',
        'toUnitUserId' => 'ToUnitUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->toUnitId) {
            $res['ToUnitId'] = $this->toUnitId;
        }
        if (null !== $this->toUnitUserId) {
            $res['ToUnitUserId'] = $this->toUnitUserId;
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
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ToUnitId'])) {
            $model->toUnitId = $map['ToUnitId'];
        }
        if (isset($map['ToUnitUserId'])) {
            $model->toUnitUserId = $map['ToUnitUserId'];
        }

        return $model;
    }
}
