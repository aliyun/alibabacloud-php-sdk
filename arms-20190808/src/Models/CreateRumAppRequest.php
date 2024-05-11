<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateRumAppRequest\tag;
use AlibabaCloud\Tea\Model;

class CreateRumAppRequest extends Model
{
    /**
     * @example default
     *
     * @var string
     */
    public $appGroup;

    /**
     * @description This parameter is required.
     *
     * @example test-app
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example com.xxxx.xxxxxx
     *
     * @var string
     */
    public $packageName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmxyexli2****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description This parameter is required.
     *
     * @example web
     *
     * @var string
     */
    public $siteType;

    /**
     * @example arms
     *
     * @var string
     */
    public $source;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'appGroup'        => 'AppGroup',
        'appName'         => 'AppName',
        'description'     => 'Description',
        'packageName'     => 'PackageName',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'siteType'        => 'SiteType',
        'source'          => 'Source',
        'tag'             => 'Tag',
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
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRumAppRequest
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
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
