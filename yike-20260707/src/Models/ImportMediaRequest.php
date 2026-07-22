<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260707\Models;

use AlibabaCloud\Dara\Model;

class ImportMediaRequest extends Model
{
    /**
     * @var int
     */
    public $categoryId;

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
    public $dynamicMetaData;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $importSource;

    /**
     * @var string
     */
    public $inputURL;

    /**
     * @var string
     */
    public $mediaTags;

    /**
     * @var string
     */
    public $mediaType;

    /**
     * @var bool
     */
    public $overwrite;

    /**
     * @var string
     */
    public $registerConfig;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'coverURL' => 'CoverURL',
        'description' => 'Description',
        'dynamicMetaData' => 'DynamicMetaData',
        'entityId' => 'EntityId',
        'importSource' => 'ImportSource',
        'inputURL' => 'InputURL',
        'mediaTags' => 'MediaTags',
        'mediaType' => 'MediaType',
        'overwrite' => 'Overwrite',
        'registerConfig' => 'RegisterConfig',
        'title' => 'Title',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dynamicMetaData) {
            $res['DynamicMetaData'] = $this->dynamicMetaData;
        }

        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }

        if (null !== $this->importSource) {
            $res['ImportSource'] = $this->importSource;
        }

        if (null !== $this->inputURL) {
            $res['InputURL'] = $this->inputURL;
        }

        if (null !== $this->mediaTags) {
            $res['MediaTags'] = $this->mediaTags;
        }

        if (null !== $this->mediaType) {
            $res['MediaType'] = $this->mediaType;
        }

        if (null !== $this->overwrite) {
            $res['Overwrite'] = $this->overwrite;
        }

        if (null !== $this->registerConfig) {
            $res['RegisterConfig'] = $this->registerConfig;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DynamicMetaData'])) {
            $model->dynamicMetaData = $map['DynamicMetaData'];
        }

        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }

        if (isset($map['ImportSource'])) {
            $model->importSource = $map['ImportSource'];
        }

        if (isset($map['InputURL'])) {
            $model->inputURL = $map['InputURL'];
        }

        if (isset($map['MediaTags'])) {
            $model->mediaTags = $map['MediaTags'];
        }

        if (isset($map['MediaType'])) {
            $model->mediaType = $map['MediaType'];
        }

        if (isset($map['Overwrite'])) {
            $model->overwrite = $map['Overwrite'];
        }

        if (isset($map['RegisterConfig'])) {
            $model->registerConfig = $map['RegisterConfig'];
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
