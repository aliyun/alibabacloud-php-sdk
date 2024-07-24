<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class CreateRumAppShrinkRequest extends Model
{
    /**
     * @description The name of the application group.
     *
     * @example default
     *
     * @var string
     */
    public $appGroup;

    /**
     * @description The application name.
     *
     * This parameter is required.
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @description The description of the application.
     *
     * @example Monitoring description
     *
     * @var string
     */
    public $description;

    /**
     * @description The nick name.
     *
     * @example test-user
     *
     * @var string
     */
    public $nickName;

    /**
     * @description The name of the Android application package. This parameter is required if you create an Android application.
     *
     * @example com.xxxx.xxxxxx
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The application type. Valid values: web, miniapp, ios, and android.
     *
     * This parameter is required.
     * @example web
     *
     * @var string
     */
    public $siteType;

    /**
     * @description The source. This is a reserved parameter.
     *
     * @example arms
     *
     * @var string
     */
    public $source;

    /**
     * @description The list of tags. You can specify a maximum of 20 tags.
     *
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'appGroup'        => 'AppGroup',
        'appName'         => 'AppName',
        'description'     => 'Description',
        'nickName'        => 'NickName',
        'packageName'     => 'PackageName',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'siteType'        => 'SiteType',
        'source'          => 'Source',
        'tagShrink'       => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGroup) {
            $res['AppGroup'] = $this->appGroup;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->nickName) {
            $res['NickName'] = $this->nickName;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->siteType) {
            $res['SiteType'] = $this->siteType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRumAppShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGroup'])) {
            $model->appGroup = $map['AppGroup'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['NickName'])) {
            $model->nickName = $map['NickName'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SiteType'])) {
            $model->siteType = $map['SiteType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
