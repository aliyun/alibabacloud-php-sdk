<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList;

use AlibabaCloud\SDK\Emr\V20160408\Models\ListEmrAvailableConfigResponseBody\emrMainVersionList\emrMainVersion\clusterTypeInfoList;
use AlibabaCloud\Tea\Model;

class emrMainVersion extends Model
{
    /**
     * @var bool
     */
    public $onCloudNative;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var clusterTypeInfoList
     */
    public $clusterTypeInfoList;

    /**
     * @var string
     */
    public $publishType;

    /**
     * @var string
     */
    public $stackVersion;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var bool
     */
    public $ecmVersion;

    /**
     * @var string
     */
    public $mainVersionName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'onCloudNative'       => 'OnCloudNative',
        'extraInfo'           => 'ExtraInfo',
        'clusterTypeInfoList' => 'ClusterTypeInfoList',
        'publishType'         => 'PublishType',
        'stackVersion'        => 'StackVersion',
        'stackName'           => 'StackName',
        'ecmVersion'          => 'EcmVersion',
        'mainVersionName'     => 'MainVersionName',
        'regionId'            => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onCloudNative) {
            $res['OnCloudNative'] = $this->onCloudNative;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->clusterTypeInfoList) {
            $res['ClusterTypeInfoList'] = null !== $this->clusterTypeInfoList ? $this->clusterTypeInfoList->toMap() : null;
        }
        if (null !== $this->publishType) {
            $res['PublishType'] = $this->publishType;
        }
        if (null !== $this->stackVersion) {
            $res['StackVersion'] = $this->stackVersion;
        }
        if (null !== $this->stackName) {
            $res['StackName'] = $this->stackName;
        }
        if (null !== $this->ecmVersion) {
            $res['EcmVersion'] = $this->ecmVersion;
        }
        if (null !== $this->mainVersionName) {
            $res['MainVersionName'] = $this->mainVersionName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['OnCloudNative'])) {
            $model->onCloudNative = $map['OnCloudNative'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['ClusterTypeInfoList'])) {
            $model->clusterTypeInfoList = clusterTypeInfoList::fromMap($map['ClusterTypeInfoList']);
        }
        if (isset($map['PublishType'])) {
            $model->publishType = $map['PublishType'];
        }
        if (isset($map['StackVersion'])) {
            $model->stackVersion = $map['StackVersion'];
        }
        if (isset($map['StackName'])) {
            $model->stackName = $map['StackName'];
        }
        if (isset($map['EcmVersion'])) {
            $model->ecmVersion = $map['EcmVersion'];
        }
        if (isset($map['MainVersionName'])) {
            $model->mainVersionName = $map['MainVersionName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
