<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AppendInstancesToPrometheusGlobalViewRequest extends Model
{
    /**
     * @description The list of global aggregation instances. The value is a JSON string.
     *
     * This parameter is required.
     * @example [ { "sourceName": "Data source name- ArmsPrometheus No.1", "sourceType":"AlibabaPrometheus", "userId":"UserID", "clusterId":"ClusterId", }, { "sourceName": "Data source name - MetrcStore No.2", "sourceType":"MetricStore", "dataSource":"Remote read endpoint of the MetricStore", "extras":{ "username":"BasicAuthUsername", "password":"BasicAuthPassword" } }, { "sourceName": "Custom ", "sourceType":"CustomPrometheus", "dataSource":"Remote read endpoint of the self-managed Prometheus data source", "extras":{ "username":"BasicAuthUsername", "password":"BasicAuthPassword" } }, { "sourceName": "Other one ", "sourceType":"Others", "dataSource":"Endpoint of another data source such as Tencent remote read", "headers":{ "AnyHeaderToFill":"Headers to be filled" }, "extras":{ "username":"BasicAuthUsername", "password":"BasicAuthPassword" } } // ....... more addre ]
     *
     * @var string
     */
    public $clusters;

    /**
     * @description The ID of the global aggregation instance.
     *
     * This parameter is required.
     * @example global-v2-cn-1670100631025794-6gjc0qgb
     *
     * @var string
     */
    public $globalViewClusterId;

    /**
     * @description The name of the global aggregation instance.
     *
     * This parameter is required.
     * @example zyGlobalView
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusters'            => 'Clusters',
        'globalViewClusterId' => 'GlobalViewClusterId',
        'groupName'           => 'GroupName',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusters) {
            $res['Clusters'] = $this->clusters;
        }
        if (null !== $this->globalViewClusterId) {
            $res['GlobalViewClusterId'] = $this->globalViewClusterId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AppendInstancesToPrometheusGlobalViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clusters'])) {
            $model->clusters = $map['Clusters'];
        }
        if (isset($map['GlobalViewClusterId'])) {
            $model->globalViewClusterId = $map['GlobalViewClusterId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
