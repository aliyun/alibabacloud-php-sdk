<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DescribeEdgeContainerAppStatsRequest extends Model
{
    /**
     * @var string
     */
    public $app;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var string
     */
    public $fields;
    /**
     * @var string
     */
    public $isp;
    /**
     * @var string
     */
    public $locate;
    /**
     * @var string
     */
    public $startTime;
    /**
     * @var string
     */
    public $tenant;
    protected $_name = [
        'app'       => 'App',
        'endTime'   => 'EndTime',
        'fields'    => 'Fields',
        'isp'       => 'Isp',
        'locate'    => 'Locate',
        'startTime' => 'StartTime',
        'tenant'    => 'Tenant',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
