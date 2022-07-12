<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecurityEventOperationStatusRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $securityEventId;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'regionId'        => 'RegionId',
        'securityEventId' => 'SecurityEventId',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityEventId) {
            $res['SecurityEventId'] = $this->securityEventId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventOperationStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityEventId'])) {
            if (!empty($map['SecurityEventId'])) {
                $model->securityEventId = $map['SecurityEventId'];
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
