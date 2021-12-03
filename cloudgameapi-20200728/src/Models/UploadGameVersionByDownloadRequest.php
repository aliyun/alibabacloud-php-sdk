<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class UploadGameVersionByDownloadRequest extends Model
{
    /**
     * @var string
     */
    public $downloadType;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $gameVersion;

    /**
     * @var string
     */
    public $hash;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'downloadType' => 'DownloadType',
        'fileType'     => 'FileType',
        'gameId'       => 'GameId',
        'gameVersion'  => 'GameVersion',
        'hash'         => 'Hash',
        'versionName'  => 'VersionName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadType) {
            $res['DownloadType'] = $this->downloadType;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->gameVersion) {
            $res['GameVersion'] = $this->gameVersion;
        }
        if (null !== $this->hash) {
            $res['Hash'] = $this->hash;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadGameVersionByDownloadRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadType'])) {
            $model->downloadType = $map['DownloadType'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameVersion'])) {
            $model->gameVersion = $map['GameVersion'];
        }
        if (isset($map['Hash'])) {
            $model->hash = $map['Hash'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
