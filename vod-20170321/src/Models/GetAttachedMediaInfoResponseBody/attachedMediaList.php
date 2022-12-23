<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAttachedMediaInfoResponseBody\attachedMediaList\categories;
use AlibabaCloud\Tea\Model;

class attachedMediaList extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example app-*****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The list of categories.
     *
     * @var categories[]
     */
    public $categories;

    /**
     * @description The time when the auxiliary media asset was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2019-01-01T10:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The description of the auxiliary media asset.
     *
     * @example description test
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the auxiliary media asset.
     *
     * @example 0222e203cf80f9c22870a4d2c****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The time when the auxiliary media asset was updated. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-05-31T11:42:20Z
     *
     * @var string
     */
    public $modificationTime;

    /**
     * @description The status of the auxiliary media asset. Valid values:
     * - **Uploading**: The auxiliary media asset is being uploaded. This is the initial status.
     * - **Normal**: The auxiliary media asset is uploaded.
     * - **UploadFail**: The auxiliary media asset fails to be uploaded.
     * @example Normal
     *
     * @var string
     */
    public $status;

    /**
     * @description The OSS bucket where the auxiliary media asset is stored.
     *
     * @example outin-bfefbb9*****c7426.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @description The tags of the auxiliary media asset.
     *
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The title of the auxiliary media asset.
     *
     * @example subtitle test
     *
     * @var string
     */
    public $title;

    /**
     * @description The type of the auxiliary media asset. Valid values:
     * - **watermark**
     * - **subtitle**
     * - **material**
     * @example subtitle
     *
     * @var string
     */
    public $type;

    /**
     * @description The URL of the auxiliary media asset.
     * > If a CDN domain name is specified, a CDN URL is returned. Otherwise, an OSS URL is returned.
     * @example https://al*****.cn/subtitle/9843C2*****4E186F19B6.vtt?auth_key=159099f60e0b7fd59****
     *
     * @var string
     */
    public $URL;
    protected $_name = [
        'appId'            => 'AppId',
        'categories'       => 'Categories',
        'creationTime'     => 'CreationTime',
        'description'      => 'Description',
        'mediaId'          => 'MediaId',
        'modificationTime' => 'ModificationTime',
        'status'           => 'Status',
        'storageLocation'  => 'StorageLocation',
        'tags'             => 'Tags',
        'title'            => 'Title',
        'type'             => 'Type',
        'URL'              => 'URL',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
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

    /**
     * @param array $map
     *
     * @return attachedMediaList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
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
