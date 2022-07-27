<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteExecutionsRequest extends Model
{
    /**
     * @var string
     */
    public $executionIds;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'executionIds' => 'ExecutionIds',
        'regionId'     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->executionIds) {
            $res['ExecutionIds'] = $this->executionIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteExecutionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExecutionIds'])) {
            $model->executionIds = $map['ExecutionIds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
