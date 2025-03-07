<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchPublicMediaInfoResponseBody\publicMediaInfos\mediaInfo;

use AlibabaCloud\Tea\Model;

class mediaBasicInfo extends Model
{
    /**
     * @example general
     *
     * @var string
     */
    public $businessType;

    /**
     * @example category
     *
     * @var string
     */
    public $category;

    /**
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.png?Expires=<ExpireTime>&OSSAccessKeyId=<OSSAccessKeyId>&Signature=<Signature>&security-token=<SecurityToken>
     *
     * @var string
     */
    public $coverURL;

    /**
     * @example 2020-12-26T06:04:49Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2020-12-29T06:04:49Z
     *
     * @var string
     */
    public $deletedTime;

    /**
     * @example description
     *
     * @var string
     */
    public $description;

    /**
     * @description MediaId
     *
     * @example icepublic-****87b921bb4a55908a72a0537e****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaTags;

    /**
     * @example audio
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example 2020-12-26T06:04:50Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example oss
     *
     * @var string
     */
    public $source;

    /**
     * @example [{"bucket":"example-bucket","count":"32","iceJobId":"******83ec44d58b2069def2e******","location":"oss-cn-shanghai","snapshotRegular":"example/example-{Count}.jpg","spriteRegular":"example/example-{TileCount}.jpg","templateId":"******e438b14ff39293eaec25******","tileCount":"1"}]
     *
     * @var string
     */
    public $spriteImages;

    /**
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @example title
     *
     * @var string
     */
    public $title;

    /**
     * @example userDataTest
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'businessType' => 'BusinessType',
        'category'     => 'Category',
        'coverURL'     => 'CoverURL',
        'createTime'   => 'CreateTime',
        'deletedTime'  => 'DeletedTime',
        'description'  => 'Description',
        'mediaId'      => 'MediaId',
        'mediaTags'    => 'MediaTags',
        'mediaType'    => 'MediaType',
        'modifiedTime' => 'ModifiedTime',
        'source'       => 'Source',
        'spriteImages' => 'SpriteImages',
        'status'       => 'Status',
        'title'        => 'Title',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
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
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
