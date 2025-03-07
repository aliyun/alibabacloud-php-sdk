<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaInfoRequest extends Model
{
    /**
     * @description Specifies whether to append tags. Default value: false. Valid values:
     *
     *   true: updates the MediaTags parameter by appending new tags.
     *   false: updates the MediaTags parameter by overwriting existing tags with new tags.
     *
     * @example true
     *
     * @var bool
     */
    public $appendTags;

    /**
     * @description The business type. Valid values:
     *
     *   subtitles
     *   watermark
     *   opening
     *   ending
     *   general
     *
     * @example video
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
     * @description The category.
     *
     *   The value can be up to 64 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example defaultCategory
     *
     * @var string
     */
    public $category;

    /**
     * @description The URL of the thumbnail.
     *
     *   The value can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The content description.
     *
     *   The value can be up to 1,024 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example defaultDescription
     *
     * @var string
     */
    public $description;

    /**
     * @description The input URL of the media asset in another service. The URL must be bound to the ID of the media asset in IMS. The URL cannot be modified once registered.
     *
     * 2\\. oss://example-bucket/example.mp4. This format indicates that the region in which the OSS bucket of the media asset resides is the same as the region in which OSS is activated.
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4
     *
     * @var string
     */
    public $inputURL;

    /**
     * @description The ID of the media asset. If this parameter is left empty, you must specify the input URL of the media asset, which has been registered in the IMS content library.
     *
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The tags.
     *
     *   Up to 16 tags are supported.
     *   Separate multiple tags with commas (,).
     *   Each tag can be up to 32 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example updateTags1,updateTags2
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @description The custom ID. The ID can be 6 to 64 characters in length and can contain only letters, digits, hyphens (-), and underscores (_). Make sure that the ID is unique among users.
     *
     * @example 123-123
     *
     * @var string
     */
    public $referenceId;

    /**
     * @description The title.
     *
     *   The value can be up to 128 bytes in length.
     *   The value must be encoded in UTF-8.
     *
     * @example defaultTitle
     *
     * @var string
     */
    public $title;

    /**
     * @description The user data. It can be up to 1,024 bytes in size.
     *
     * @example userData
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'appendTags'   => 'AppendTags',
        'businessType' => 'BusinessType',
        'cateId'       => 'CateId',
        'category'     => 'Category',
        'coverURL'     => 'CoverURL',
        'description'  => 'Description',
        'inputURL'     => 'InputURL',
        'mediaId'      => 'MediaId',
        'mediaTags'    => 'MediaTags',
        'referenceId'  => 'ReferenceId',
        'title'        => 'Title',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appendTags) {
            $res['AppendTags'] = $this->appendTags;
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
        if (null !== $this->referenceId) {
            $res['ReferenceId'] = $this->referenceId;
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
     * @return UpdateMediaInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppendTags'])) {
            $model->appendTags = $map['AppendTags'];
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
        if (isset($map['ReferenceId'])) {
            $model->referenceId = $map['ReferenceId'];
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
