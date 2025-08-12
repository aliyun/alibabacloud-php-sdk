<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeLogMonitorListResponseBody\logMonitorList\valueFilter;

class logMonitorList extends Model
{
    /**
     * @var int
     */
    public $gmtCreate;

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
    public $metricName;

    /**
     * @var string
     */
    public $slsLogstore;

    /**
     * @var string
     */
    public $slsProject;

    /**
     * @var string
     */
    public $slsRegionId;

    /**
     * @var valueFilter[]
     */
    public $valueFilter;

    /**
     * @var string
     */
    public $valueFilterRelation;
    protected $_name = [
        'gmtCreate' => 'GmtCreate',
        'groupId' => 'GroupId',
        'logId' => 'LogId',
        'metricName' => 'MetricName',
        'slsLogstore' => 'SlsLogstore',
        'slsProject' => 'SlsProject',
        'slsRegionId' => 'SlsRegionId',
        'valueFilter' => 'ValueFilter',
        'valueFilterRelation' => 'ValueFilterRelation',
    ];

    public function validate()
    {
        if (\is_array($this->valueFilter)) {
            Model::validateArray($this->valueFilter);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->logId) {
            $res['LogId'] = $this->logId;
        }

        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }

        if (null !== $this->slsLogstore) {
            $res['SlsLogstore'] = $this->slsLogstore;
        }

        if (null !== $this->slsProject) {
            $res['SlsProject'] = $this->slsProject;
        }

        if (null !== $this->slsRegionId) {
            $res['SlsRegionId'] = $this->slsRegionId;
        }

        if (null !== $this->valueFilter) {
            if (\is_array($this->valueFilter)) {
                $res['ValueFilter'] = [];
                $n1 = 0;
                foreach ($this->valueFilter as $item1) {
                    $res['ValueFilter'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->valueFilterRelation) {
            $res['ValueFilterRelation'] = $this->valueFilterRelation;
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
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['LogId'])) {
            $model->logId = $map['LogId'];
        }

        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }

        if (isset($map['SlsLogstore'])) {
            $model->slsLogstore = $map['SlsLogstore'];
        }

        if (isset($map['SlsProject'])) {
            $model->slsProject = $map['SlsProject'];
        }

        if (isset($map['SlsRegionId'])) {
            $model->slsRegionId = $map['SlsRegionId'];
        }

        if (isset($map['ValueFilter'])) {
            if (!empty($map['ValueFilter'])) {
                $model->valueFilter = [];
                $n1 = 0;
                foreach ($map['ValueFilter'] as $item1) {
                    $model->valueFilter[$n1] = valueFilter::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ValueFilterRelation'])) {
            $model->valueFilterRelation = $map['ValueFilterRelation'];
        }

        return $model;
    }
}
