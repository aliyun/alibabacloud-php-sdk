<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeDialogueNodeStatisticsRequest extends Model
{
    /**
     * @example aeff669b-388f-4619-82af-81e177df5628
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example a3c670d1-01bf-491d-b9aa-759b1a82f47c
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example 30
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
     * @return DescribeDialogueNodeStatisticsRequest
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
