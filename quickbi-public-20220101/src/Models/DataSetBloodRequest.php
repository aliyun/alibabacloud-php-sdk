<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Dara\Model;

class DataSetBloodRequest extends Model
{
    /**
     * @var string
     */
    public $dataSetIds;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $worksType;
    protected $_name = [
        'dataSetIds' => 'DataSetIds',
        'userId' => 'UserId',
        'worksType' => 'WorksType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
