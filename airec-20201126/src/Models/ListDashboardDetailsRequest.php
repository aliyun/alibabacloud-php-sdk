<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListDashboardDetailsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1588521600
     *
     * @var int
     */
    public $endTime;

    /**
     * @example all
     *
     * @var string
     */
    public $experimentIds;

    /**
     * @example hot,emb,u2x2i,hilp,new,
     *
     * @var string
     */
    public $matchTypes;

    /**
     * @description This parameter is required.
     *
     * @example xxx
     *
     * @var string
     */
    public $metricType;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $sceneIds;

    /**
     * @description This parameter is required.
     *
     * @example 1588521600
     *
     * @var int
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example Alibaba
     *
     * @var string
     */
    public $traceIds;
    protected $_name = [
        'endTime'       => 'endTime',
        'experimentIds' => 'experimentIds',
        'matchTypes'    => 'matchTypes',
        'metricType'    => 'metricType',
        'sceneIds'      => 'sceneIds',
        'startTime'     => 'startTime',
        'traceIds'      => 'traceIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->experimentIds) {
            $res['experimentIds'] = $this->experimentIds;
        }
        if (null !== $this->matchTypes) {
            $res['matchTypes'] = $this->matchTypes;
        }
        if (null !== $this->metricType) {
            $res['metricType'] = $this->metricType;
        }
        if (null !== $this->sceneIds) {
            $res['sceneIds'] = $this->sceneIds;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->traceIds) {
            $res['traceIds'] = $this->traceIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDashboardDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['experimentIds'])) {
            $model->experimentIds = $map['experimentIds'];
        }
        if (isset($map['matchTypes'])) {
            $model->matchTypes = $map['matchTypes'];
        }
        if (isset($map['metricType'])) {
            $model->metricType = $map['metricType'];
        }
        if (isset($map['sceneIds'])) {
            $model->sceneIds = $map['sceneIds'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['traceIds'])) {
            $model->traceIds = $map['traceIds'];
        }

        return $model;
    }
}
