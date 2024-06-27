<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DataSetBloodRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 234235234,234235235,234235235
     *
     * @var string
     */
    public $dataSetIds;

    /**
     * @example dasasgaj342351
     *
     * @var string
     */
    public $userId;

    /**
     * @example PAGE
     *
     * @var string
     */
    public $worksType;
    protected $_name = [
        'dataSetIds' => 'DataSetIds',
        'userId'     => 'UserId',
        'worksType'  => 'WorksType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataSetIds) {
            $res['DataSetIds'] = $this->dataSetIds;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->worksType) {
            $res['WorksType'] = $this->worksType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataSetBloodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataSetIds'])) {
            $model->dataSetIds = $map['DataSetIds'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorksType'])) {
            $model->worksType = $map['WorksType'];
        }

        return $model;
    }
}
