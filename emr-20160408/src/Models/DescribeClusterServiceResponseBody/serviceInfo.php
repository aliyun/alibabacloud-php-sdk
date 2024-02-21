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
     * @var clusterServiceSummaryList
     */
    public $clusterServiceSummaryList;

    /**
     * @var needRestartComponentNameList
     */
    public $needRestartComponentNameList;

    /**
     * @var needRestartHostIdList
     */
    public $needRestartHostIdList;

    /**
     * @example ""
     *
     * @var string
     */
    public $needRestartInfo;

    /**
     * @example 0
     *
     * @var int
     */
    public $needRestartNum;

    /**
     * @var serviceActionList
     */
    public $serviceActionList;

    /**
     * @example YARN
     *
     * @var string
     */
    public $serviceName;

    /**
     * @example INSTALLED
     *
     * @var string
     */
    public $serviceStatus;

    /**
     * @example 2.7.2
     *
     * @var string
     */
    public $serviceVersion;
    protected $_name = [
        'clusterServiceSummaryList'    => 'ClusterServiceSummaryList',
        'needRestartComponentNameList' => 'NeedRestartComponentNameList',
        'needRestartHostIdList'        => 'NeedRestartHostIdList',
        'needRestartInfo'              => 'NeedRestartInfo',
        'needRestartNum'               => 'NeedRestartNum',
        'serviceActionList'            => 'ServiceActionList',
        'serviceName'                  => 'ServiceName',
        'serviceStatus'                => 'ServiceStatus',
        'serviceVersion'               => 'ServiceVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterServiceSummaryList) {
            $res['ClusterServiceSummaryList'] = null !== $this->clusterServiceSummaryList ? $this->clusterServiceSummaryList->toMap() : null;
        }
        if (null !== $this->needRestartComponentNameList) {
            $res['NeedRestartComponentNameList'] = null !== $this->needRestartComponentNameList ? $this->needRestartComponentNameList->toMap() : null;
        }
        if (null !== $this->needRestartHostIdList) {
            $res['NeedRestartHostIdList'] = null !== $this->needRestartHostIdList ? $this->needRestartHostIdList->toMap() : null;
        }
        if (null !== $this->needRestartInfo) {
            $res['NeedRestartInfo'] = $this->needRestartInfo;
        }
        if (null !== $this->needRestartNum) {
            $res['NeedRestartNum'] = $this->needRestartNum;
        }
        if (null !== $this->serviceActionList) {
            $res['ServiceActionList'] = null !== $this->serviceActionList ? $this->serviceActionList->toMap() : null;
        }
        if (null !== $this->serviceName) {
            $res['ServiceName'] = $this->serviceName;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->serviceVersion) {
            $res['ServiceVersion'] = $this->serviceVersion;
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
        if (isset($map['ClusterServiceSummaryList'])) {
            $model->clusterServiceSummaryList = clusterServiceSummaryList::fromMap($map['ClusterServiceSummaryList']);
        }
        if (isset($map['NeedRestartComponentNameList'])) {
            $model->needRestartComponentNameList = needRestartComponentNameList::fromMap($map['NeedRestartComponentNameList']);
        }
        if (isset($map['NeedRestartHostIdList'])) {
            $model->needRestartHostIdList = needRestartHostIdList::fromMap($map['NeedRestartHostIdList']);
        }
        if (isset($map['NeedRestartInfo'])) {
            $model->needRestartInfo = $map['NeedRestartInfo'];
        }
        if (isset($map['NeedRestartNum'])) {
            $model->needRestartNum = $map['NeedRestartNum'];
        }
        if (isset($map['ServiceActionList'])) {
            $model->serviceActionList = serviceActionList::fromMap($map['ServiceActionList']);
        }
        if (isset($map['ServiceName'])) {
            $model->serviceName = $map['ServiceName'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['ServiceVersion'])) {
            $model->serviceVersion = $map['ServiceVersion'];
        }

        return $model;
    }
}
