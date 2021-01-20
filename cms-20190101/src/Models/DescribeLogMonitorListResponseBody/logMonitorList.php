<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListResponseBody\logMonitorList\valueFilter;
use AlibabaCloud\Tea\Model;

class logMonitorList extends Model
{
    /**
     * @var string
     */
    public $valueFilterRelation;

    /**
     * @var string
     */
    public $slsLogstore;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var valueFilter[]
     */
    public $valueFilter;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $logId;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $slsProject;
    protected $_name = [
        'valueFilterRelation' => 'ValueFilterRelation',
        'slsLogstore'         => 'SlsLogstore',
        'metricName'          => 'MetricName',
        'valueFilter'         => 'ValueFilter',
        'groupId'             => 'GroupId',
        'logId'               => 'LogId',
        'slsRegionId'         => 'SlsRegionId',
        'gmtCreate'           => 'GmtCreate',
        'slsProject'          => 'SlsProject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->valueFilterRelation) {
            $res['ValueFilterRelation'] = $this->valueFilterRelation;
        }
        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->valueFilter) {
            $res['ValueFilter'] = [];
            if (null !== $this->valueFilter && \is_array($this->valueFilter)) {
                $n = 0;
                foreach ($this->valueFilter as $item) {
                    $res['ValueFilter'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }
        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logMonitorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ValueFilterRelation'])) {
            $model->valueFilterRelation = $map['ValueFilterRelation'];
        }
        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['ValueFilter'])) {
            if (!empty($map['ValueFilter'])) {
                $model->valueFilter = [];
                $n                  = 0;
                foreach ($map['ValueFilter'] as $item) {
                    $model->valueFilter[$n++] = null !== $item ? valueFilter::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }
        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        return $model;
    }
}
