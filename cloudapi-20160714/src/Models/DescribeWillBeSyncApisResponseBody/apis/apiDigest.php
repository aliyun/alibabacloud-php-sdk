<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeWillBeSyncApisResponseBody\apis;

use AlibabaCloud\Tea\Model;

class apiDigest extends Model
{
    /**
     * @var string
     */
    public $vpcName;

    /**
     * @var string
     */
    public $apiId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $vpcSchema;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $method;

    /**
     * @var bool
     */
    public $vpcEnabled;

    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'vpcName'    => 'VpcName',
        'apiId'      => 'ApiId',
        'groupName'  => 'GroupName',
        'groupId'    => 'GroupId',
        'vpcSchema'  => 'VpcSchema',
        'version'    => 'Version',
        'path'       => 'Path',
        'method'     => 'Method',
        'vpcEnabled' => 'VpcEnabled',
        'apiName'    => 'ApiName',
        'regionId'   => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcName) {
            $res['VpcName'] = $this->vpcName;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->vpcSchema) {
            $res['VpcSchema'] = $this->vpcSchema;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->vpcEnabled) {
            $res['VpcEnabled'] = $this->vpcEnabled;
        }
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiDigest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpcName'])) {
            $model->vpcName = $map['VpcName'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['VpcSchema'])) {
            $model->vpcSchema = $map['VpcSchema'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['VpcEnabled'])) {
            $model->vpcEnabled = $map['VpcEnabled'];
        }
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
