<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\CreateEventStreamingRequest\source;

use AlibabaCloud\Tea\Model;

class sourcePrometheusParameters extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example c83555068b6******ad213f565f209
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The data type.
     *
     * @example json
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The labels.
     *
     * @example __name__=.*
     *
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'dataType'  => 'DataType',
        'labels'    => 'Labels',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
