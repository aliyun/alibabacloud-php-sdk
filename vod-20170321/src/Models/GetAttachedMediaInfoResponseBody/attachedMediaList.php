<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponseBody\attachedMediaList\categories;

class attachedMediaList extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var categories[]
     */
    public $categories;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $modificationTime;

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
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $URL;
    protected $_name = [
        'appId' => 'AppId',
        'categories' => 'Categories',
        'creationTime' => 'CreationTime',
        'description' => 'Description',
        'mediaId' => 'MediaId',
        'modificationTime' => 'ModificationTime',
        'status' => 'Status',
        'storageLocation' => 'StorageLocation',
        'tags' => 'Tags',
        'title' => 'Title',
        'type' => 'Type',
        'URL' => 'URL',
    ];

    public function validate()
    {
        if (\is_array($this->categories)) {
            Model::validateArray($this->categories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->categories) {
            if (\is_array($this->categories)) {
                $res['Categories'] = [];
                $n1 = 0;
                foreach ($this->categories as $item1) {
                    $res['Categories'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }

        if (null !== $this->modificationTime) {
            $res['ModificationTime'] = $this->modificationTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }

        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->URL) {
            $res['URL'] = $this->URL;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Categories'])) {
            if (!empty($map['Categories'])) {
                $model->categories = [];
                $n1 = 0;
                foreach ($map['Categories'] as $item1) {
                    $model->categories[$n1++] = categories::fromMap($item1);
                }
            }
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }

        if (isset($map['ModificationTime'])) {
            $model->modificationTime = $map['ModificationTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }

        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['URL'])) {
            $model->URL = $map['URL'];
        }

        return $model;
    }
}
