<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaBasicInfosResponseBody\mediaInfos;

use AlibabaCloud\Tea\Model;

class mediaBasicInfo extends Model
{
    /**
     * @example ICE
     *
     * @var string
     */
    public $biz;

    /**
     * @example opening
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 3049
     *
     * @var int
     */
    public $cateId;

    /**
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
     * @example 2021-01-08T16:52:04Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 2021-01-08T16:52:07Z
     *
     * @var string
     */
    public $deletedTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example https://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4
     *
     * @var string
     */
    public $inputURL;

    /**
     * @example ****019b82e24b37a1c2958dec38****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example tags,tags2
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @example video
     *
     * @var string
     */
    public $mediaType;

    /**
     * @example 2021-01-08T16:52:07Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example 123-123
     *
     * @var string
     */
    public $referenceId;

    /**
     * @example [{"bucket":"example-bucket","count":"3","iceJobId":"******f48f0e4154976b2b8c45******","location":"oss-cn-beijing","snapshotRegular":"example.jpg","templateId":"******e6a6440b29eb60bd7c******"}]
     *
     * @var string
     */
    public $snapshots;

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
     * @var string
     */
    public $title;

    /**
     * @example Init
     *
     * @var string
     */
    public $transcodeStatus;

    /**
     * @example general
     *
     * @var string
     */
    public $uploadSource;

    /**
     * @example userData
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'biz'             => 'Biz',
        'businessType'    => 'BusinessType',
        'cateId'          => 'CateId',
        'category'        => 'Category',
        'coverURL'        => 'CoverURL',
        'createTime'      => 'CreateTime',
        'deletedTime'     => 'DeletedTime',
        'description'     => 'Description',
        'inputURL'        => 'InputURL',
        'mediaId'         => 'MediaId',
        'mediaTags'       => 'MediaTags',
        'mediaType'       => 'MediaType',
        'modifiedTime'    => 'ModifiedTime',
        'referenceId'     => 'ReferenceId',
        'snapshots'       => 'Snapshots',
        'source'          => 'Source',
        'spriteImages'    => 'SpriteImages',
        'status'          => 'Status',
        'title'           => 'Title',
        'transcodeStatus' => 'TranscodeStatus',
        'uploadSource'    => 'UploadSource',
        'userData'        => 'UserData',
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
        if (null !== $this->transcodeStatus) {
            $res['TranscodeStatus'] = $this->transcodeStatus;
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
        if (isset($map['TranscodeStatus'])) {
            $model->transcodeStatus = $map['TranscodeStatus'];
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
