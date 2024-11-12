<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subSyncJob\reverseJob;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @description The Alibaba Cloud account ID.
     *
     * @example 191448876515****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description The operator of the tag.
     *
     * @example 191448876515****
     *
     * @var int
     */
    public $creator;

    /**
     * @description The time when the task was created.
     *
     * @example 2022-03-16T08:01:19Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the task was modified.
     *
     * @example 2022-03-16T08:01:19Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The primary key of the table.
     *
     * @example 2
     *
     * @var int
     */
    public $id;

    /**
     * @description The ID of the region in which the DTS instance resides. For more information, see [Supported regions](https://help.aliyun.com/document_detail/141033.html).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the data migration, data synchronization, or change tracking instance.
     *
     * @example dtsnjuc14kp12u****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource type.
     *
     * @example ALIYUN::DTS::INSTANCE
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description Indicates whether the tag is visible. Valid values:
     *
     *   **0**: The tag is public.
     *   **1**: The tag is private.
     *
     * @example 0
     *
     * @var string
     */
    public $scope;

    /**
     * @description The ID of the region in which the DTS task resides.
     *
     * > In most cases, the ID of the region in which the destination instance resides is returned.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $srcRegion;

    /**
     * @description The type of the tag. Valid values:
     *
     *   **System**: The tag was created by the system.
     *   **Custom**: The tag was created by a user.
     *
     * > By default, if the parameter is left empty, custom tags and system tags are returned.
     * @example System
     *
     * @var string
     */
    public $tagCategory;

    /**
     * @description The tag key.
     *
     * @example key1
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag value.
     *
     * @example value1
     *
     * @var string
     */
    public $tagValue;
    protected $_name = [
        'aliUid'       => 'AliUid',
        'creator'      => 'Creator',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'regionId'     => 'RegionId',
        'resourceId'   => 'ResourceId',
        'resourceType' => 'ResourceType',
        'scope'        => 'Scope',
        'srcRegion'    => 'SrcRegion',
        'tagCategory'  => 'TagCategory',
        'tagKey'       => 'TagKey',
        'tagValue'     => 'TagValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }
        if (null !== $this->srcRegion) {
            $res['SrcRegion'] = $this->srcRegion;
        }
        if (null !== $this->tagCategory) {
            $res['TagCategory'] = $this->tagCategory;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagValue) {
            $res['TagValue'] = $this->tagValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }
        if (isset($map['SrcRegion'])) {
            $model->srcRegion = $map['SrcRegion'];
        }
        if (isset($map['TagCategory'])) {
            $model->tagCategory = $map['TagCategory'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagValue'])) {
            $model->tagValue = $map['TagValue'];
        }

        return $model;
    }
}
