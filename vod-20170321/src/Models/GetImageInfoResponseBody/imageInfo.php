<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetImageInfoResponseBody\imageInfo\mezzanine;
use AlibabaCloud\Tea\Model;

class imageInfo extends Model
{
    /**
     * @var mezzanine
     */
    public $mezzanine;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $cateName;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $URL;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $imageId;
    protected $_name = [
        'mezzanine'       => 'Mezzanine',
        'status'          => 'Status',
        'storageLocation' => 'StorageLocation',
        'creationTime'    => 'CreationTime',
        'cateId'          => 'CateId',
        'tags'            => 'Tags',
        'cateName'        => 'CateName',
        'imageType'       => 'ImageType',
        'description'     => 'Description',
        'appId'           => 'AppId',
        'URL'             => 'URL',
        'title'           => 'Title',
        'imageId'         => 'ImageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mezzanine) {
            $res['Mezzanine'] = null !== $this->mezzanine ? $this->mezzanine->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->cateName) {
            $res['CateName'] = $this->cateName;
        }
        if (null !== $this->imageType) {
            $res['ImageType'] = $this->imageType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mezzanine'])) {
            $model->mezzanine = mezzanine::fromMap($map['Mezzanine']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['CateName'])) {
            $model->cateName = $map['CateName'];
        }
        if (isset($map['ImageType'])) {
            $model->imageType = $map['ImageType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        return $model;
    }
}
