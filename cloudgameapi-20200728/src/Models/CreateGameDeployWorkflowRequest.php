<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class CreateGameDeployWorkflowRequest extends Model
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
    public $frameRate;

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
    public $instance;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $resolution;

    /**
     * @var string
     */
    public $versionName;
    protected $_name = [
        'downloadType' => 'DownloadType',
        'fileType'     => 'FileType',
        'frameRate'    => 'FrameRate',
        'gameId'       => 'GameId',
        'gameVersion'  => 'GameVersion',
        'hash'         => 'Hash',
        'instance'     => 'Instance',
        'projectId'    => 'ProjectId',
        'resolution'   => 'Resolution',
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
        if (null !== $this->frameRate) {
            $res['FrameRate'] = $this->frameRate;
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
        if (null !== $this->instance) {
            $res['Instance'] = $this->instance;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->versionName) {
            $res['VersionName'] = $this->versionName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGameDeployWorkflowRequest
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
        if (isset($map['FrameRate'])) {
            $model->frameRate = $map['FrameRate'];
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
        if (isset($map['Instance'])) {
            $model->instance = $map['Instance'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['VersionName'])) {
            $model->versionName = $map['VersionName'];
        }

        return $model;
    }
}
