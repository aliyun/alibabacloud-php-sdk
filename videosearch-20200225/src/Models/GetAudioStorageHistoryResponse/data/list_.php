<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videosearch\V20200225\Models\GetAudioStorageHistoryResponse\data;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $audioId;

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
    public $audioUrl;
    protected $_name = [
        'audioId'      => 'AudioId',
        'description'  => 'Description',
        'storageType'  => 'StorageType',
        'storageInfo'  => 'StorageInfo',
        'modifiedTime' => 'ModifiedTime',
        'audioUrl'     => 'AudioUrl',
    ];

    public function validate()
    {
        Model::validateRequired('audioId', $this->audioId, true);
        Model::validateRequired('description', $this->description, true);
        Model::validateRequired('storageType', $this->storageType, true);
        Model::validateRequired('storageInfo', $this->storageInfo, true);
        Model::validateRequired('modifiedTime', $this->modifiedTime, true);
        Model::validateRequired('audioUrl', $this->audioUrl, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioId) {
            $res['AudioId'] = $this->audioId;
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
        if (null !== $this->audioUrl) {
            $res['AudioUrl'] = $this->audioUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioId'])) {
            $model->audioId = $map['AudioId'];
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
        if (isset($map['AudioUrl'])) {
            $model->audioUrl = $map['AudioUrl'];
        }

        return $model;
    }
}
