<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class DescribeDeviceIdByOuterInfoRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $queryValue;
    protected $_name = [
        'projectId'  => 'ProjectId',
        'queryType'  => 'QueryType',
        'queryValue' => 'QueryValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->queryValue) {
            $res['QueryValue'] = $this->queryValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDeviceIdByOuterInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['QueryValue'])) {
            $model->queryValue = $map['QueryValue'];
        }

        return $model;
    }
}
