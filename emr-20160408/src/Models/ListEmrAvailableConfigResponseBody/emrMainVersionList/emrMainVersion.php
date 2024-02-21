<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList;
use AlibabaCloud\Tea\Model;

class emrMainVersion extends Model
{
    /**
     * @var clusterTypeInfoList
     */
    public $clusterTypeInfoList;

    /**
     * @example true
     *
     * @var bool
     */
    public $ecmVersion;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @example EMR-3.15.1
     *
     * @var string
     */
    public $mainVersionName;

    /**
     * @example true
     *
     * @var bool
     */
    public $onCloudNative;

    /**
     * @var string
     */
    public $publishType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example EMR
     *
     * @var string
     */
    public $stackName;

    /**
     * @example EMR-3.15.1
     *
     * @var string
     */
    public $stackVersion;
    protected $_name = [
        'clusterTypeInfoList' => 'ClusterTypeInfoList',
        'ecmVersion'          => 'EcmVersion',
        'extraInfo'           => 'ExtraInfo',
        'mainVersionName'     => 'MainVersionName',
        'onCloudNative'       => 'OnCloudNative',
        'publishType'         => 'PublishType',
        'regionId'            => 'RegionId',
        'stackName'           => 'StackName',
        'stackVersion'        => 'StackVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterTypeInfoList) {
            $res['ClusterTypeInfoList'] = null !== $this->clusterTypeInfoList ? $this->clusterTypeInfoList->toMap() : null;
        }
        if (null !== $this->ecmVersion) {
            $res['EcmVersion'] = $this->ecmVersion;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->mainVersionName) {
            $res['MainVersionName'] = $this->mainVersionName;
        }
        if (null !== $this->onCloudNative) {
            $res['OnCloudNative'] = $this->onCloudNative;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->stackVersion) {
            $res['StackVersion'] = $this->stackVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return emrMainVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterTypeInfoList'])) {
            $model->clusterTypeInfoList = clusterTypeInfoList::fromMap($map['ClusterTypeInfoList']);
        }
        if (isset($map['EcmVersion'])) {
            $model->ecmVersion = $map['EcmVersion'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['MainVersionName'])) {
            $model->mainVersionName = $map['MainVersionName'];
        }
        if (isset($map['OnCloudNative'])) {
            $model->onCloudNative = $map['OnCloudNative'];
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['StackVersion'])) {
            $model->stackVersion = $map['StackVersion'];
        }

        return $model;
    }
}
