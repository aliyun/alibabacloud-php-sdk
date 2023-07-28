<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Tea\Model;

class DeleteExecutionsRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ["exec-xxx"]
     *
     * @var string
     */
    public $executionIds;

    /**
     * @description A JSON array that consists of multiple instance IDs. The format of the JSON array is [“xxxxxxxxx”, “yyyyyyyyy”, … “zzzzzzzzz”]. Separate multiple instance IDs with commas (,). A maximum of 100 instance IDs can be specified at a time.
     *
     * @example cn-hangzhou
     *
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
