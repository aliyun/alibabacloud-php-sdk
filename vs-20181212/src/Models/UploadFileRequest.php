<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class UploadFileRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @description This parameter is required.
     *
     * @example mytest
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example 150b6083f50dd08159d45a0d5e4b56f9
     *
     * @var string
     */
    public $md5;

    /**
     * @description This parameter is required.
     *
     * @example https://xxx.xxx.xxx.tar
     *
     * @var string
     */
    public $originUrl;

    /**
     * @description This parameter is required.
     *
     * @example /data/tmp/test/xxx.tar
     *
     * @var string
     */
    public $targetPath;
    protected $_name = [
        'description' => 'Description',
        'fileName'    => 'FileName',
        'md5'         => 'Md5',
        'originUrl'   => 'OriginUrl',
        'targetPath'  => 'TargetPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->originUrl) {
            $res['OriginUrl'] = $this->originUrl;
        }
        if (null !== $this->targetPath) {
            $res['TargetPath'] = $this->targetPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['OriginUrl'])) {
            $model->originUrl = $map['OriginUrl'];
        }
        if (isset($map['TargetPath'])) {
            $model->targetPath = $map['TargetPath'];
        }

        return $model;
    }
}
