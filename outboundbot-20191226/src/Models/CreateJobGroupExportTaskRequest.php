<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models;

use AlibabaCloud\Tea\Model;

class CreateJobGroupExportTaskRequest extends Model
{
    /**
     * @example a4274627-265f-4e14-b2d6-4ee7d4f8593e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example baf6dfdc-eb79-4c63-ab19-c56388b1fbdd
     *
     * @var string
     */
    public $jobGroupId;

    /**
     * @example []
     *
     * @var string[]
     */
    public $option;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'jobGroupId' => 'JobGroupId',
        'option'     => 'Option',
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
        if (null !== $this->option) {
            $res['Option'] = $this->option;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateJobGroupExportTaskRequest
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
        if (isset($map['Option'])) {
            if (!empty($map['Option'])) {
                $model->option = $map['Option'];
            }
        }

        return $model;
    }
}
