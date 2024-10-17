<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaInfoResponseBody\mediaInfo;

use AlibabaCloud\Tea\Model;

class mediaBasicInfo extends Model
{
    /**
     * @description The service to which the media asset belongs.
     *
     * @example ICE
     *
     * @var string
     */
    public $biz;

    /**
     * @description The business type.
     *
     * @example general
     *
     * @var string
     */
    public $businessType;

    /**
     * @description The category ID.
     *
     * @example 3048
     *
     * @var int
     */
    public $cateId;

    /**
     * @description The category name.
     *
     * @example cateName
     *
     * @var string
     */
    public $cateName;

    /**
     * @description The category.
     *
     * @var string
     */
    public $category;

    /**
     * @description The URL of the thumbnail.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.png?Expires=<ExpireTime>&OSSAccessKeyId=<OSSAccessKeyId>&Signature=<Signature>&security-token=<SecurityToken>
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The time when the media asset was created.
     *
     * @example 2020-12-26T04:11:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the media asset was deleted.
     *
     * @example 2020-12-26T04:11:15Z
     *
     * @var string
     */
    public $deletedTime;

    /**
     * @description The content description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The input URL of the media asset in another service.
     *
     * @example https://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4
     *
     * @var string
     */
    public $inputURL;

    /**
     * @description The ID of the media asset.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The tags.
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @description The type of the media asset.
     *
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @description The time when the media asset was last modified.
     *
     * @example 2020-12-26T04:11:10Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The custom ID. The ID can be 6 to 64 characters in length and can contain only letters, digits, hyphens (-), and underscores (_). The ID is unique among users.
     *
     * @example 123-1234
     *
     * @var string
     */
    public $referenceId;

    /**
     * @description The snapshots.
     *
     * @example [
     * ]
     * @var string
     */
    public $snapshots;

    /**
     * @description The source.
     *
     * @example oss
     *
     * @var string
     */
    public $source;

    /**
     * @description The sprite.
     *
     * @example [{"bucket":"example-bucket","count":"32","iceJobId":"******83ec44d58b2069def2e******","location":"oss-cn-shanghai","snapshotRegular":"example/example-{Count}.jpg","spriteRegular":"example/example-{TileCount}.jpg","templateId":"******e438b14ff39293eaec25******","tileCount":"1"}]
     *
     * @var string
     */
    public $spriteImages;

    /**
     * @description The resource status.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The title.
     *
     * @var string
     */
    public $title;

    /**
     * @description The upload source of the media asset.
     *
     * @example general
     *
     * @var string
     */
    public $uploadSource;

    /**
     * @description The user data.
     *
     * @example userDataTest
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'biz'          => 'Biz',
        'businessType' => 'BusinessType',
        'cateId'       => 'CateId',
        'cateName'     => 'CateName',
        'category'     => 'Category',
        'coverURL'     => 'CoverURL',
        'createTime'   => 'CreateTime',
        'deletedTime'  => 'DeletedTime',
        'description'  => 'Description',
        'inputURL'     => 'InputURL',
        'mediaId'      => 'MediaId',
        'mediaTags'    => 'MediaTags',
        'mediaType'    => 'MediaType',
        'modifiedTime' => 'ModifiedTime',
        'referenceId'  => 'ReferenceId',
        'snapshots'    => 'Snapshots',
        'source'       => 'Source',
        'spriteImages' => 'SpriteImages',
        'status'       => 'Status',
        'title'        => 'Title',
        'uploadSource' => 'UploadSource',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->biz) {
            $res['Biz'] = $this->biz;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deletedTime) {
            $res['DeletedTime'] = $this->deletedTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaTags) {
            $res['MediaTags'] = $this->mediaTags;
        }
        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
        }
        if (null !== $this->snapshots) {
            $res['Snapshots'] = $this->snapshots;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->spriteImages) {
            $res['SpriteImages'] = $this->spriteImages;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->uploadSource) {
            $res['UploadSource'] = $this->uploadSource;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Biz'])) {
            $model->biz = $map['Biz'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeletedTime'])) {
            $model->deletedTime = $map['DeletedTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaTags'])) {
            $model->mediaTags = $map['MediaTags'];
        }
        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
        }
        if (isset($map['Snapshots'])) {
            $model->snapshots = $map['Snapshots'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SpriteImages'])) {
            $model->spriteImages = $map['SpriteImages'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UploadSource'])) {
            $model->uploadSource = $map['UploadSource'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
