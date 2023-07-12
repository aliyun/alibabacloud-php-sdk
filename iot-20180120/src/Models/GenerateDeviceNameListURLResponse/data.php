<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GenerateDeviceNameListURLResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $objectStorage;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'accessKeyId'   => 'AccessKeyId',
        'fileUrl'       => 'FileUrl',
        'host'          => 'Host',
        'key'           => 'Key',
        'objectStorage' => 'ObjectStorage',
        'policy'        => 'Policy',
        'signature'     => 'Signature',
        'utcCreate'     => 'UtcCreate',
    ];

    public function validate()
    {
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('fileUrl', $this->fileUrl, true);
        Model::validateRequired('host', $this->host, true);
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('objectStorage', $this->objectStorage, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('signature', $this->signature, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->objectStorage) {
            $res['ObjectStorage'] = $this->objectStorage;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
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
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['ObjectStorage'])) {
            $model->objectStorage = $map['ObjectStorage'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
