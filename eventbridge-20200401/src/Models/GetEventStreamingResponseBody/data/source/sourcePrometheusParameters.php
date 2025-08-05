<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetEventStreamingResponseBody\data\source;

use AlibabaCloud\Tea\Model;

class sourcePrometheusParameters extends Model
{
    /**
     * @example c83555068b6******ad213f565f209
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example json
     *
     * @var string
     */
    public $dataType;

    /**
     * @example {"env":"test"}
     *
     * @var string
     */
    public $externalLabels;

    /**
     * @example __name__=.*
     *
     * @var string
     */
    public $labels;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example test-role
     *
     * @var string
     */
    public $roleName;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dataType' => 'DataType',
        'externalLabels' => 'ExternalLabels',
        'labels' => 'Labels',
        'regionId' => 'RegionId',
        'roleName' => 'RoleName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->externalLabels) {
            $res['ExternalLabels'] = $this->externalLabels;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourcePrometheusParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['ExternalLabels'])) {
            $model->externalLabels = $map['ExternalLabels'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }

        return $model;
    }
}
