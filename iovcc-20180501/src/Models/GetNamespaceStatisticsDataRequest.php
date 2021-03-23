<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class GetNamespaceStatisticsDataRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $dimensionType;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $endTime;
    protected $_name = [
        'projectId'     => 'ProjectId',
        'namespace'     => 'Namespace',
        'dimensionType' => 'DimensionType',
        'startTime'     => 'StartTime',
        'endTime'       => 'EndTime',
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
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->dimensionType) {
            $res['DimensionType'] = $this->dimensionType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNamespaceStatisticsDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['DimensionType'])) {
            $model->dimensionType = $map['DimensionType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        return $model;
    }
}
