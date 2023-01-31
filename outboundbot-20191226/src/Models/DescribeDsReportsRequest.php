<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class DescribeDsReportsRequest extends Model
{
    /**
     * @example a4274627-265f-4e14-b2d6-4ee7d4f8593e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 9eb8fe4f-b286-4834-9688-2c9b171e223e
     *
     * @var string
     */
    public $jobGroupId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDsReportsRequest
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

        return $model;
    }
}
