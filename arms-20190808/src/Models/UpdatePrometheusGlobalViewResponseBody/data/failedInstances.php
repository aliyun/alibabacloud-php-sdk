<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdatePrometheusGlobalViewResponseBody\data;

use AlibabaCloud\Tea\Model;

class failedInstances extends Model
{
    /**
     * @description The ID of the Prometheus instance.
     *
     * @example cdb65ed2d527345*********
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the data source.
     *
     * @example sourcename-test
     *
     * @var string
     */
    public $sourceName;

    /**
     * @description The type of the data source. Valid values:
     *
     *   AlibabaPrometheus
     *   MetricStore
     *   CustomPrometheus
     *
     * @example AlibabaPrometheus
     *
     * @var string
     */
    public $sourceType;

    /**
     * @description The user ID.
     *
     * @example 23784673825*******
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'sourceName' => 'SourceName',
        'sourceType' => 'SourceType',
        'userId'     => 'UserId',
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
        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return failedInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
