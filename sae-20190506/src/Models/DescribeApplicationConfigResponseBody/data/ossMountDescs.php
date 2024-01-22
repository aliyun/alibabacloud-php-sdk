<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class ossMountDescs extends Model
{
    /**
     * @description The name of the bucket.
     *
     * @example oss-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The directory or object that you created in the OSS bucket. If the specified object or directory is invalid, an exception occurs.
     *
     * @example data/user.data
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @description The directory of your container in SAE. The parameter value that you specified overwrites the original value. If the specified directory does not exist, SAE automatically creates the directory.
     *
     * @example /usr/data/user.data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description Indicates whether the application can use the container directory to read data from or write data to resources in the directory of the OSS bucket. Valid values:
     *
     *   **true**: The application has read-only permissions.
     *   **false**: The application has read and write permissions.
     *
     * @example true
     *
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
