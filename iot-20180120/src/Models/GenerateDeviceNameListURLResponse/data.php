<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\GenerateDeviceNameListURLResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $host;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $accessKeyId;

    /**
     * @var string
     */
    public $signature;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $utcCreate;

    /**
     * @var string
     */
    public $objectStorage;
    protected $_name = [
        'key'           => 'Key',
        'host'          => 'Host',
        'policy'        => 'Policy',
        'accessKeyId'   => 'AccessKeyId',
        'signature'     => 'Signature',
        'fileUrl'       => 'FileUrl',
        'utcCreate'     => 'UtcCreate',
        'objectStorage' => 'ObjectStorage',
    ];

    public function validate()
    {
        Model::validateRequired('key', $this->key, true);
        Model::validateRequired('host', $this->host, true);
        Model::validateRequired('policy', $this->policy, true);
        Model::validateRequired('accessKeyId', $this->accessKeyId, true);
        Model::validateRequired('signature', $this->signature, true);
        Model::validateRequired('fileUrl', $this->fileUrl, true);
        Model::validateRequired('utcCreate', $this->utcCreate, true);
        Model::validateRequired('objectStorage', $this->objectStorage, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }
        if (null !== $this->accessKeyId) {
            $res['AccessKeyId'] = $this->accessKeyId;
        }
        if (null !== $this->signature) {
            $res['Signature'] = $this->signature;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }
        if (null !== $this->objectStorage) {
            $res['ObjectStorage'] = $this->objectStorage;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }
        if (isset($map['AccessKeyId'])) {
            $model->accessKeyId = $map['AccessKeyId'];
        }
        if (isset($map['Signature'])) {
            $model->signature = $map['Signature'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }
        if (isset($map['ObjectStorage'])) {
            $model->objectStorage = $map['ObjectStorage'];
        }

        return $model;
    }
}
