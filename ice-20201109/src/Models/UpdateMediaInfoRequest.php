<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaInfoRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $appendTags;

    /**
     * @example video
     *
     * @var string
     */
    public $businessType;

    /**
     * @example 3048
     *
     * @var int
     */
    public $cateId;

    /**
     * @example defaultCategory
     *
     * @var string
     */
    public $category;

    /**
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.png
     *
     * @var string
     */
    public $coverURL;

    /**
     * @example defaultDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.mp4
     *
     * @var string
     */
    public $inputURL;

    /**
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example updateTags1,updateTags2
     *
     * @var string
     */
    public $mediaTags;

    /**
     * @example 123-123
     *
     * @var string
     */
    public $referenceId;

    /**
     * @example defaultTitle
     *
     * @var string
     */
    public $title;

    /**
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
