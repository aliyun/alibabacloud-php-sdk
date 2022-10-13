<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ExportStatisticalDataRequest extends Model
{
    /**
     * @var int
     */
    public $beginTimeLeftRange;

    /**
     * @var int
     */
    public $beginTimeRightRange;

    /**
     * @var string
     */
    public $exportType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $timeUnit;
    protected $_name = [
        'beginTimeLeftRange'  => 'BeginTimeLeftRange',
        'beginTimeRightRange' => 'BeginTimeRightRange',
        'exportType'          => 'ExportType',
        'instanceId'          => 'InstanceId',
        'timeUnit'            => 'TimeUnit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTimeLeftRange) {
            $res['BeginTimeLeftRange'] = $this->beginTimeLeftRange;
        }
        if (null !== $this->beginTimeRightRange) {
            $res['BeginTimeRightRange'] = $this->beginTimeRightRange;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->timeUnit) {
            $res['TimeUnit'] = $this->timeUnit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportStatisticalDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginTimeLeftRange'])) {
            $model->beginTimeLeftRange = $map['BeginTimeLeftRange'];
        }
        if (isset($map['BeginTimeRightRange'])) {
            $model->beginTimeRightRange = $map['BeginTimeRightRange'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TimeUnit'])) {
            $model->timeUnit = $map['TimeUnit'];
        }

        return $model;
    }
}
