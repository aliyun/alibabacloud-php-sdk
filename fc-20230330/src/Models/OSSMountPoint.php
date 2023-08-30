<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class OSSMountPoint extends Model
{
    /**
     * @example my-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example /my-dir
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @example http://oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example /mnt/dir
     *
     * @var string
     */
    public $mountDir;

    /**
     * @example true
     *
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'bucketName' => 'bucketName',
        'bucketPath' => 'bucketPath',
        'endpoint'   => 'endpoint',
        'mountDir'   => 'mountDir',
        'readOnly'   => 'readOnly',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['bucketName'] = $this->bucketName;
        }
        if (null !== $this->bucketPath) {
            $res['bucketPath'] = $this->bucketPath;
        }
        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }
        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }
        if (null !== $this->readOnly) {
            $res['readOnly'] = $this->readOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSMountPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
        }
        if (isset($map['bucketPath'])) {
            $model->bucketPath = $map['bucketPath'];
        }
        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }
        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }
        if (isset($map['readOnly'])) {
            $model->readOnly = $map['readOnly'];
        }

        return $model;
    }
}
