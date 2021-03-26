<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AddEditingProjectMaterialsResponseBody\mediaInfos;

use AlibabaCloud\Tea\Model;

class mediaBasicInfo extends Model
{
    /**
     * @description MediaId
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 待注册的媒资在相应系统中的地址
     *
     * @var string
     */
    public $inputURL;

    /**
     * @description 媒资媒体类型
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description 媒资业务类型
     *
     * @var string
     */
    public $businessType;

    /**
     * @description 来源
     *
     * @var string
     */
    public $source;

    /**
     * @description 标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 内容描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 分类
     *
     * @var string
     */
    public $category;

    /**
     * @description 标签
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @description 封面地址
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description 用户数据
     *
     * @var string
     */
    public $userData;

    /**
     * @description 截图
     *
     * @var string
     */
    public $snapshots;

    /**
     * @description 资源状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 转码状态
     *
     * @var string
     */
    public $transcodeStatus;

    /**
     * @description 媒资创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 媒资修改时间
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 媒资删除时间
     *
     * @var string
     */
    public $deletedTime;
    protected $_name = [
        'mediaId'         => 'MediaId',
        'inputURL'        => 'InputURL',
        'mediaType'       => 'MediaType',
        'businessType'    => 'BusinessType',
        'source'          => 'Source',
        'title'           => 'Title',
        'description'     => 'Description',
        'category'        => 'Category',
        'mediaTags'       => 'MediaTags',
        'coverURL'        => 'CoverURL',
        'userData'        => 'UserData',
        'snapshots'       => 'Snapshots',
        'status'          => 'Status',
        'transcodeStatus' => 'TranscodeStatus',
        'createTime'      => 'CreateTime',
        'modifiedTime'    => 'ModifiedTime',
        'deletedTime'     => 'DeletedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->mediaTags) {
            $res['MediaTags'] = $this->mediaTags;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transcodeStatus) {
            $res['TranscodeStatus'] = $this->transcodeStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->deletedTime) {
            $res['DeletedTime'] = $this->deletedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaBasicInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['MediaTags'])) {
            $model->mediaTags = $map['MediaTags'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = $map['Snapshots'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TranscodeStatus'])) {
            $model->transcodeStatus = $map['TranscodeStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['DeletedTime'])) {
            $model->deletedTime = $map['DeletedTime'];
        }

        return $model;
    }
}
