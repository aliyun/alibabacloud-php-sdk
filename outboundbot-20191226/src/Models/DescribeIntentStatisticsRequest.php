<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeIntentStatisticsRequest extends Model
{
    /**
     * @example c3c92de8-e4bd-4db4-a962-50f8acce40bc
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 040355a9-e80c-4308-b85c-aa5b9fd25246
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example 5
     *
     * @var int
     */
    public $limit;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'limit'      => 'Limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIntentStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        return $model;
    }
}
