<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\OSSMountConfig;

use AlibabaCloud\Tea\Model;

class mountPoints extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'bucketName' => 'bucketName',
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
     * @return mountPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bucketName'])) {
            $model->bucketName = $map['bucketName'];
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
