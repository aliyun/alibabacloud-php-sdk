<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class DescribeEdgeContainerAppStatsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example app-xxxx
     *
     * @var string
     */
    public $app;

    /**
     * @example 2024-09-02T16:04:05Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @example pod_ready_rate
     *
     * @var string
     */
    public $fields;

    /**
     * @example telecom,unicom,cmcc
     *
     * @var string
     */
    public $isp;

    /**
     * @example huizhou
     *
     * @var string
     */
    public $locate;

    /**
     * @example 2024-09-02T15:04:05Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example t-xxxx
     *
     * @var string
     */
    public $tenant;
    protected $_name = [
        'app' => 'App',
        'endTime' => 'EndTime',
        'fields' => 'Fields',
        'isp' => 'Isp',
        'locate' => 'Locate',
        'startTime' => 'StartTime',
        'tenant' => 'Tenant',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->app) {
            $res['App'] = $this->app;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->fields) {
            $res['Fields'] = $this->fields;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->locate) {
            $res['Locate'] = $this->locate;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEdgeContainerAppStatsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['App'])) {
            $model->app = $map['App'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Fields'])) {
            $model->fields = $map['Fields'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Locate'])) {
            $model->locate = $map['Locate'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }

        return $model;
    }
}
