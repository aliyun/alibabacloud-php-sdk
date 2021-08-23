<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tdsr\V20200101\Models\ListSubSceneResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description 子场景ID
     *
     * @var string
     */
    public $id;

    /**
     * @description 子场景名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 图片ID/视频ID
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description 图片路径/视频路径
     *
     * @var string
     */
    public $url;

    /**
     * @description 图片路径/视频封面路径
     *
     * @var string
     */
    public $coverUrl;

    /**
     * @description 子场景状态 1.未重建，      * 2.中间模型重建中，      * 3.中间模型重建完成，      * 4.待重建，      * 5.服务商重建中，      * 6.服务商重建完成，      * 7.已发布      * 8.发布中
     *
     * @var int
     */
    public $status;

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
     * @description 资源名称
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description 切图的路径
     *
     * @var string
     */
    public $cubemapPath;
    protected $_name = [
        'id'           => 'Id',
        'name'         => 'Name',
        'resourceId'   => 'ResourceId',
        'url'          => 'Url',
        'coverUrl'     => 'CoverUrl',
        'status'       => 'Status',
        'gmtCreate'    => 'GmtCreate',
        'gmtModified'  => 'GmtModified',
        'resourceName' => 'ResourceName',
        'cubemapPath'  => 'CubemapPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->cubemapPath) {
            $res['CubemapPath'] = $this->cubemapPath;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['CubemapPath'])) {
            $model->cubemapPath = $map['CubemapPath'];
        }

        return $model;
    }
}
