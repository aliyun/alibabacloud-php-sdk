<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateMediaInfoRequest extends Model
{
    /**
     * @var bool
     */
    public $appendTags;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $inputURL;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $mediaTags;

    /**
     * @var string
     */
    public $title;

    /**
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
