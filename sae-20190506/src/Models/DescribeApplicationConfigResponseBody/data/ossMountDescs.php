<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class ossMountDescs extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var string
     */
    public $bucketPath;

    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var bool
     */
    public $readOnly;
    protected $_name = [
        'bucketName' => 'bucketName',
        'bucketPath' => 'bucketPath',
        'mountPath'  => 'mountPath',
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
        if (null !== $this->mountPath) {
            $res['mountPath'] = $this->mountPath;
        }
        if (null !== $this->readOnly) {
            $res['readOnly'] = $this->readOnly;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ossMountDescs
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
        if (isset($map['mountPath'])) {
            $model->mountPath = $map['mountPath'];
        }
        if (isset($map['readOnly'])) {
            $model->readOnly = $map['readOnly'];
        }

        return $model;
    }
}
