<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob;

use AlibabaCloud\Tea\Model;

class tagList extends Model
{
    /**
     * @description 用户id
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description 标签操作者
     *
     * @var int
     */
    public $creator;

    /**
     * @description 创建时间
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 修改时间
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description 主键
     *
     * @var int
     */
    public $id;

    /**
     * @description region_id
     *
     * @var string
     */
    public $regionId;

    /**
     * @description dts instance id
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 资源类型
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description 0为public，1为private (Public, Private, All)
     *
     * @var string
     */
    public $scope;

    /**
     * @description 任务所在region，注意一般是dts的目标端region
     *
     * @var string
     */
    public $srcRegion;

    /**
     * @description 标签类型：系统标签－System，用户标签－Custom (Custom, System, All)
     *
     * @var string
     */
    public $tagCategory;

    /**
     * @description 标签键tagkey
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description 标签值tagvalue
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
