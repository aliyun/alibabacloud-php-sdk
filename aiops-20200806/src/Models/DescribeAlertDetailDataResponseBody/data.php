<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models\DescribeAlertDetailDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $alertName;

    /**
     * @var string
     */
    public $algorithm;

    /**
     * @var string
     */
    public $beginTime;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $countConvergence;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceRegionName;

    /**
     * @var string
     */
    public $metricExtend;

    /**
     * @var string
     */
    public $mttr;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $metricUnit;

    /**
     * @var string
     */
    public $productCodeKey;
    protected $_name = [
        'alertName'          => 'AlertName',
        'algorithm'          => 'Algorithm',
        'beginTime'          => 'BeginTime',
        'category'           => 'Category',
        'countConvergence'   => 'CountConvergence',
        'endTime'            => 'EndTime',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'instanceRegionName' => 'InstanceRegionName',
        'metricExtend'       => 'MetricExtend',
        'mttr'               => 'Mttr',
        'serviceType'        => 'ServiceType',
        'metricName'         => 'metricName',
        'metricUnit'         => 'metricUnit',
        'productCodeKey'     => 'productCodeKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertName) {
            $res['AlertName'] = $this->alertName;
        }
        if (null !== $this->algorithm) {
            $res['Algorithm'] = $this->algorithm;
        }
        if (null !== $this->beginTime) {
            $res['BeginTime'] = $this->beginTime;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->countConvergence) {
            $res['CountConvergence'] = $this->countConvergence;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceRegionName) {
            $res['InstanceRegionName'] = $this->instanceRegionName;
        }
        if (null !== $this->metricExtend) {
            $res['MetricExtend'] = $this->metricExtend;
        }
        if (null !== $this->mttr) {
            $res['Mttr'] = $this->mttr;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->metricName) {
            $res['metricName'] = $this->metricName;
        }
        if (null !== $this->metricUnit) {
            $res['metricUnit'] = $this->metricUnit;
        }
        if (null !== $this->productCodeKey) {
            $res['productCodeKey'] = $this->productCodeKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertName'])) {
            $model->alertName = $map['AlertName'];
        }
        if (isset($map['Algorithm'])) {
            $model->algorithm = $map['Algorithm'];
        }
        if (isset($map['BeginTime'])) {
            $model->beginTime = $map['BeginTime'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CountConvergence'])) {
            $model->countConvergence = $map['CountConvergence'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceRegionName'])) {
            $model->instanceRegionName = $map['InstanceRegionName'];
        }
        if (isset($map['MetricExtend'])) {
            $model->metricExtend = $map['MetricExtend'];
        }
        if (isset($map['Mttr'])) {
            $model->mttr = $map['Mttr'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['metricName'])) {
            $model->metricName = $map['metricName'];
        }
        if (isset($map['metricUnit'])) {
            $model->metricUnit = $map['metricUnit'];
        }
        if (isset($map['productCodeKey'])) {
            $model->productCodeKey = $map['productCodeKey'];
        }

        return $model;
    }
}
