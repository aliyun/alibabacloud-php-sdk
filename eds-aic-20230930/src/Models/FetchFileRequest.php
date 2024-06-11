<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class FetchFileRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $androidInstanceIdList;

    /**
     * @description This parameter is required.
     *
     * @example /data/a.txt
     *
     * @var string
     */
    public $sourceFilePath;

    /**
     * @description This parameter is required.
     *
     * @example oss-cn-hangzhou.aliyuncs.com
     *
     * @var string
     */
    public $uploadEndpoint;

    /**
     * @description This parameter is required.
     *
     * @example OSS
     *
     * @var string
     */
    public $uploadType;

    /**
     * @description This parameter is required.
     *
     * @example oss://cloudphone-saved-bucket-cn-hangzhou-165955035250****\/backup/
     *
     * @var string
     */
    public $uploadUrl;
    protected $_name = [
        'androidInstanceIdList' => 'AndroidInstanceIdList',
        'sourceFilePath'        => 'SourceFilePath',
        'uploadEndpoint'        => 'UploadEndpoint',
        'uploadType'            => 'UploadType',
        'uploadUrl'             => 'UploadUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidInstanceIdList) {
            $res['AndroidInstanceIdList'] = $this->androidInstanceIdList;
        }
        if (null !== $this->sourceFilePath) {
            $res['SourceFilePath'] = $this->sourceFilePath;
        }
        if (null !== $this->uploadEndpoint) {
            $res['UploadEndpoint'] = $this->uploadEndpoint;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }
        if (null !== $this->uploadUrl) {
            $res['UploadUrl'] = $this->uploadUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FetchFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidInstanceIdList'])) {
            if (!empty($map['AndroidInstanceIdList'])) {
                $model->androidInstanceIdList = $map['AndroidInstanceIdList'];
            }
        }
        if (isset($map['SourceFilePath'])) {
            $model->sourceFilePath = $map['SourceFilePath'];
        }
        if (isset($map['UploadEndpoint'])) {
            $model->uploadEndpoint = $map['UploadEndpoint'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }
        if (isset($map['UploadUrl'])) {
            $model->uploadUrl = $map['UploadUrl'];
        }

        return $model;
    }
}
