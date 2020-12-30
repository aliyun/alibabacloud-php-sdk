<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo\clusterServiceSummaryList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo\needRestartComponentNameList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo\needRestartHostIdList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeClusterServiceResponseBody\serviceInfo\serviceActionList;
use AlibabaCloud\Tea\Model;

class serviceInfo extends Model
{
    /**
     * @var string
     */
    public $needRestartInfo;

    /**
     * @var needRestartHostIdList
     */
    public $needRestartHostIdList;

    /**
     * @var clusterServiceSummaryList
     */
    public $clusterServiceSummaryList;

    /**
     * @var serviceActionList
     */
    public $serviceActionList;

    /**
     * @var int
     */
    public $needRestartNum;

    /**
     * @var needRestartComponentNameList
     */
    public $needRestartComponentNameList;

    /**
     * @var string
     */
    public $serviceVersion;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'needRestartInfo'              => 'NeedRestartInfo',
        'needRestartHostIdList'        => 'NeedRestartHostIdList',
        'clusterServiceSummaryList'    => 'ClusterServiceSummaryList',
        'serviceActionList'            => 'ServiceActionList',
        'needRestartNum'               => 'NeedRestartNum',
        'needRestartComponentNameList' => 'NeedRestartComponentNameList',
        'serviceVersion'               => 'ServiceVersion',
        'serviceStatus'                => 'ServiceStatus',
        'serviceName'                  => 'ServiceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needRestartInfo) {
            $res['NeedRestartInfo'] = $this->needRestartInfo;
        }
        if (null !== $this->needRestartHostIdList) {
            $res['NeedRestartHostIdList'] = null !== $this->needRestartHostIdList ? $this->needRestartHostIdList->toMap() : null;
        }
        if (null !== $this->clusterServiceSummaryList) {
            $res['ClusterServiceSummaryList'] = null !== $this->clusterServiceSummaryList ? $this->clusterServiceSummaryList->toMap() : null;
        }
        if (null !== $this->serviceActionList) {
            $res['ServiceActionList'] = null !== $this->serviceActionList ? $this->serviceActionList->toMap() : null;
        }
        if (null !== $this->needRestartNum) {
            $res['NeedRestartNum'] = $this->needRestartNum;
        }
        if (null !== $this->needRestartComponentNameList) {
            $res['NeedRestartComponentNameList'] = null !== $this->needRestartComponentNameList ? $this->needRestartComponentNameList->toMap() : null;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedRestartInfo'])) {
            $model->needRestartInfo = $map['NeedRestartInfo'];
        }
        if (isset($map['NeedRestartHostIdList'])) {
            $model->needRestartHostIdList = needRestartHostIdList::fromMap($map['NeedRestartHostIdList']);
        }
        if (isset($map['ClusterServiceSummaryList'])) {
            $model->clusterServiceSummaryList = clusterServiceSummaryList::fromMap($map['ClusterServiceSummaryList']);
        }
        if (isset($map['ServiceActionList'])) {
            $model->serviceActionList = serviceActionList::fromMap($map['ServiceActionList']);
        }
        if (isset($map['NeedRestartNum'])) {
            $model->needRestartNum = $map['NeedRestartNum'];
        }
        if (isset($map['NeedRestartComponentNameList'])) {
            $model->needRestartComponentNameList = needRestartComponentNameList::fromMap($map['NeedRestartComponentNameList']);
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }

        return $model;
    }
}
