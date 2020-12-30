<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList;

use AlibabaCloud\SDK\Vod\V20170321\Models\SearchMediaResponseBody\mediaList\attachedMedia\categories;
use AlibabaCloud\Tea\Model;

class attachedMedia extends Model
{
    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $modificationTime;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var categories[]
     */
    public $categories;

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
    protected $_name = [
        'storageLocation'  => 'StorageLocation',
        'status'           => 'Status',
        'creationTime'     => 'CreationTime',
        'tags'             => 'Tags',
        'modificationTime' => 'ModificationTime',
        'mediaId'          => 'MediaId',
        'businessType'     => 'BusinessType',
        'description'      => 'Description',
        'categories'       => 'Categories',
        'appId'            => 'AppId',
        'URL'              => 'URL',
        'title'            => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->categories) {
            $res['Categories'] = [];
            if (null !== $this->categories && \is_array($this->categories)) {
                $n = 0;
                foreach ($this->categories as $item) {
                    $res['Categories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attachedMedia
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n                 = 0;
                foreach ($map['Categories'] as $item) {
                    $model->categories[$n++] = null !== $item ? categories::fromMap($item) : $item;
                }
            }
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

        return $model;
    }
}
