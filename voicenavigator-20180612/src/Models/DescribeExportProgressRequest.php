<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class DescribeExportProgressRequest extends Model
{
    /**
     * @example 0de8e5ccc2b645039ae6fbda443da73f
     *
     * @var string
     */
    public $exportTaskId;

    /**
     * @example 868eef14-7515-4856-8a50-5c9a22abdbcc
     *
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'exportTaskId' => 'ExportTaskId',
        'instanceId'   => 'InstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTaskId) {
            $res['ExportTaskId'] = $this->exportTaskId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExportProgressRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportTaskId'])) {
            $model->exportTaskId = $map['ExportTaskId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
