<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetStorageHistoryResponse\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $storageType;

    /**
     * @var int
     */
    public $storageInfo;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $videoUrl;
    protected $_name = [
        'videoId'      => 'VideoId',
        'description'  => 'Description',
        'storageType'  => 'StorageType',
        'storageInfo'  => 'StorageInfo',
        'modifiedTime' => 'ModifiedTime',
        'videoUrl'     => 'VideoUrl',
    ];

    public function validate()
    {
        Model::validateRequired('videoId', $this->videoId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('storageInfo', $this->storageInfo, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('videoUrl', $this->videoUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }
        if (null !== $this->storageInfo) {
            $res['StorageInfo'] = $this->storageInfo;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->videoUrl) {
            $res['VideoUrl'] = $this->videoUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }
        if (isset($map['StorageInfo'])) {
            $model->storageInfo = $map['StorageInfo'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['VideoUrl'])) {
            $model->videoUrl = $map['VideoUrl'];
        }

        return $model;
    }
}
