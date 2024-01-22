<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class ossMountDescs extends Model
{
    /**
     * @description The bucket name.
     *
     * @example oss-bucket
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description The directory or object in OSS. If the specified directory or object does not exist, an error is returned.
     *
     * @example data/user.data
     *
     * @var string
     */
    public $bucketPath;

    /**
     * @description The path of the container in SAE. The parameter value that you specified overwrites the original value. If the specified path does not exist, SAE automatically creates the path.
     *
     * @example /usr/data/user.data
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description Indicates whether the application can use the container path to read data from or write data to resources in the directory of the OSS bucket. Valid values:
     *
     *   **true**: The application has the read-only permission.
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
