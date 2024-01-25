<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models\RequestBackgroundResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var mixed[]
     */
    public $bgConfig;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var bool
     */
    public $open;

    /**
     * @var string
     */
    public $resourceUuid;

    /**
     * @var string
     */
    public $scope;
    protected $_name = [
        'bgConfig'     => 'BgConfig',
        'downloadUrl'  => 'DownloadUrl',
        'fileType'     => 'FileType',
        'mode'         => 'Mode',
        'open'         => 'Open',
        'resourceUuid' => 'ResourceUuid',
        'scope'        => 'Scope',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bgConfig) {
            $res['BgConfig'] = $this->bgConfig;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->open) {
            $res['Open'] = $this->open;
        }
        if (null !== $this->resourceUuid) {
            $res['ResourceUuid'] = $this->resourceUuid;
        }
        if (null !== $this->scope) {
            $res['Scope'] = $this->scope;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BgConfig'])) {
            $model->bgConfig = $map['BgConfig'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Open'])) {
            $model->open = $map['Open'];
        }
        if (isset($map['ResourceUuid'])) {
            $model->resourceUuid = $map['ResourceUuid'];
        }
        if (isset($map['Scope'])) {
            $model->scope = $map['Scope'];
        }

        return $model;
    }
}
