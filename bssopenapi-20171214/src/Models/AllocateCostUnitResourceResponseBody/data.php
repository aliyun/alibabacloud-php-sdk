<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\AllocateCostUnitResourceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $toUnitId;

    /**
     * @var int
     */
    public $toUnitUserId;
    protected $_name = [
        'isSuccess' => 'IsSuccess',
        'toUnitId' => 'ToUnitId',
        'toUnitUserId' => 'ToUnitUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
