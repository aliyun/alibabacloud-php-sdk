<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeApplicationConfigResponseBody\data;

use AlibabaCloud\Tea\Model;

class secretMountDesc extends Model
{
    /**
     * @description The key to Base64 encode values.
     *
     * @example task-center
     *
     * @var string
     */
    public $key;

    /**
     * @description The mount path.
     *
     * @example /opt/www/runtime/logs
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description The secret ID of the instance.
     *
     * @example 520
     *
     * @var int
     */
    public $secretId;

    /**
     * @description The name of the secret.
     *
     * @example dummy-name-opaque-894
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'key' => 'Key',
        'mountPath' => 'MountPath',
        'secretId' => 'SecretId',
        'secretName' => 'SecretName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->secretId) {
            $res['SecretId'] = $this->secretId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return secretMountDesc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['SecretId'])) {
            $model->secretId = $map['SecretId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
