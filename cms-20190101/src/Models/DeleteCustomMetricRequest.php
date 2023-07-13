<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteCustomMetricRequest extends Model
{
    /**
     * @description The ID of the application group.
     *
     * @example 3607****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The MD5 value of the HTTP request body. The MD5 value is a 128-bit hash value used to verify the uniqueness of the reported monitoring data.
     *
     * >  `Md5` is returned when you query the reported monitoring data of a metric.
     * @example 38796C8CFFEB8F89BB2A626C7BD7****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The name of the metric.
     *
     * @example AdvanceCredit
     *
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request for reporting monitoring data.
     *
     * >  `UUID` is returned when you query the reported monitoring data of a metric. We recommend that you specify the `Md5` parameter.
     * @example 5497633c-66c5-4eae-abaa-89db5adb****
     *
     * @var string
     */
    public $UUID;
    protected $_name = [
        'groupId'    => 'GroupId',
        'md5'        => 'Md5',
        'metricName' => 'MetricName',
        'regionId'   => 'RegionId',
        'UUID'       => 'UUID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCustomMetricRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }

        return $model;
    }
}
