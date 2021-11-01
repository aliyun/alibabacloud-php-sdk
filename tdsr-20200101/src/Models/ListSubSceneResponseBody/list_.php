<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 2k基准图路径
     *
     * @var string
     */
    public $baseImageUrl;

    /**
     * @description 图片路径/视频封面路径
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 切图的路径
     *
     * @var string
     */
    public $cubemapPath;

    /**
     * @description 是否删除
     *
     * @var bool
     */
    public $deleted;

    /**
     * @description 创建时间
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description 最后修改时间
     *
     * @var int
     */
    public $gmtModified;

    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 标注数据
     *
     * @var string
     */
    public $layoutData;

    /**
     * @description 子场景名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 原图地址
     *
     * @var string
     */
    public $originUrl;

    /**
     * @description 图片ID/视频ID
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 资源名称
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description 子场景状态 1.未重建，      * 2.中间模型重建中，      * 3.中间模型重建完成，      * 4.待重建，      * 5.服务商重建中，      * 6.服务商重建完成，      * 7.已发布      * 8.发布中
     *
     * @var int
     */
    public $status;

    /**
     * @description 图片路径/视频路径
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'baseImageUrl' => 'BaseImageUrl',
        'coverUrl'     => 'CoverUrl',
        'cubemapPath'  => 'CubemapPath',
        'deleted'      => 'Deleted',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'id'           => 'Id',
        'layoutData'   => 'LayoutData',
        'name'         => 'Name',
        'originUrl'    => 'OriginUrl',
        'resourceId'   => 'ResourceId',
        'resourceName' => 'ResourceName',
        'status'       => 'Status',
        'url'          => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baseImageUrl) {
            $res['BaseImageUrl'] = $this->baseImageUrl;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->cubemapPath) {
            $res['CubemapPath'] = $this->cubemapPath;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
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
        if (null !== $this->layoutData) {
            $res['LayoutData'] = $this->layoutData;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->originUrl) {
            $res['OriginUrl'] = $this->originUrl;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BaseImageUrl'])) {
            $model->baseImageUrl = $map['BaseImageUrl'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CubemapPath'])) {
            $model->cubemapPath = $map['CubemapPath'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
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
        if (isset($map['LayoutData'])) {
            $model->layoutData = $map['LayoutData'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OriginUrl'])) {
            $model->originUrl = $map['OriginUrl'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
