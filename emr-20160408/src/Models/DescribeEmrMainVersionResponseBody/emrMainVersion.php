<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody;

use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion\clusterTypeInfoList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion\clusterTypeWhiteUserList;
use AlibabaCloud\SDK\Emr\V20160408\Models\DescribeEmrMainVersionResponseBody\emrMainVersion\whiteUserList;
use AlibabaCloud\Tea\Model;

class emrMainVersion extends Model
{
    /**
     * @var clusterTypeInfoList
     */
    public $clusterTypeInfoList;

    /**
     * @var clusterTypeWhiteUserList
     */
    public $clusterTypeWhiteUserList;

    /**
     * @var bool
     */
    public $display;

    /**
     * @var bool
     */
    public $ecmVersion;

    /**
     * @var string
     */
    public $emrVersion;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $publishType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $stackName;

    /**
     * @var string
     */
    public $stackVersion;

    /**
     * @var whiteUserList
     */
    public $whiteUserList;
    protected $_name = [
        'clusterTypeInfoList'      => 'ClusterTypeInfoList',
        'clusterTypeWhiteUserList' => 'ClusterTypeWhiteUserList',
        'display'                  => 'Display',
        'ecmVersion'               => 'EcmVersion',
        'emrVersion'               => 'EmrVersion',
        'imageId'                  => 'ImageId',
        'publishType'              => 'PublishType',
        'regionId'                 => 'RegionId',
        'stackName'                => 'StackName',
        'stackVersion'             => 'StackVersion',
        'whiteUserList'            => 'WhiteUserList',
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
        if (null !== $this->clusterTypeWhiteUserList) {
            $res['ClusterTypeWhiteUserList'] = null !== $this->clusterTypeWhiteUserList ? $this->clusterTypeWhiteUserList->toMap() : null;
        }
        if (null !== $this->display) {
            $res['Display'] = $this->display;
        }
        if (null !== $this->ecmVersion) {
            $res['EcmVersion'] = $this->ecmVersion;
        }
        if (null !== $this->emrVersion) {
            $res['EmrVersion'] = $this->emrVersion;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (null !== $this->whiteUserList) {
            $res['WhiteUserList'] = null !== $this->whiteUserList ? $this->whiteUserList->toMap() : null;
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
        if (isset($map['ClusterTypeWhiteUserList'])) {
            $model->clusterTypeWhiteUserList = clusterTypeWhiteUserList::fromMap($map['ClusterTypeWhiteUserList']);
        }
        if (isset($map['Display'])) {
            $model->display = $map['Display'];
        }
        if (isset($map['EcmVersion'])) {
            $model->ecmVersion = $map['EcmVersion'];
        }
        if (isset($map['EmrVersion'])) {
            $model->emrVersion = $map['EmrVersion'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
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
        if (isset($map['WhiteUserList'])) {
            $model->whiteUserList = whiteUserList::fromMap($map['WhiteUserList']);
        }

        return $model;
    }
}
