<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class QueryStorageMetricRequest extends Model
{
    /**
     * @var string[]
     */
    public $projectList;

    /**
     * @var string[]
     */
    public $typeList;

    /**
     * @description This parameter is required.
     *
     * @example 1735536322
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example 1735534322
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'projectList' => 'projectList',
        'typeList' => 'typeList',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectList) {
            $res['projectList'] = $this->projectList;
        }
        if (null !== $this->typeList) {
            $res['typeList'] = $this->typeList;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryStorageMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectList'])) {
            if (!empty($map['projectList'])) {
                $model->projectList = $map['projectList'];
            }
        }
        if (isset($map['typeList'])) {
            if (!empty($map['typeList'])) {
                $model->typeList = $map['typeList'];
            }
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
