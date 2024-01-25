<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models;

use AlibabaCloud\Tea\Model;

class CreateComputeTaskByMultiDataSetIdRequest extends Model
{
    /**
     * @var int
     */
    public $appId;

    /**
     * @var string
     */
    public $dataSetIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $remarks;
    protected $_name = [
        'appId'      => 'appId',
        'dataSetIds' => 'dataSetIds',
        'name'       => 'name',
        'remarks'    => 'remarks',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }
        if (null !== $this->dataSetIds) {
            $res['dataSetIds'] = $this->dataSetIds;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->remarks) {
            $res['remarks'] = $this->remarks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateComputeTaskByMultiDataSetIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }
        if (isset($map['dataSetIds'])) {
            $model->dataSetIds = $map['dataSetIds'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['remarks'])) {
            $model->remarks = $map['remarks'];
        }

        return $model;
    }
}
