<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GetClientConfigResponseBody extends Model
{
    /**
     * @description oss bucket 名称
     *
     * @var string
     */
    public $clientUploadBucket;

    /**
     * @description 路径
     *
     * @var string
     */
    public $clientUploadPath;

    /**
     * @description 状态
     *
     * @var string
     */
    public $clientUploadStorageStatus;

    /**
     * @description 存储类型
     *
     * @var string
     */
    public $clientUploadStorageType;

    /**
     * @description Id of the request
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clientUploadBucket'        => 'ClientUploadBucket',
        'clientUploadPath'          => 'ClientUploadPath',
        'clientUploadStorageStatus' => 'ClientUploadStorageStatus',
        'clientUploadStorageType'   => 'ClientUploadStorageType',
        'requestId'                 => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientUploadBucket) {
            $res['ClientUploadBucket'] = $this->clientUploadBucket;
        }
        if (null !== $this->clientUploadPath) {
            $res['ClientUploadPath'] = $this->clientUploadPath;
        }
        if (null !== $this->clientUploadStorageStatus) {
            $res['ClientUploadStorageStatus'] = $this->clientUploadStorageStatus;
        }
        if (null !== $this->clientUploadStorageType) {
            $res['ClientUploadStorageType'] = $this->clientUploadStorageType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClientConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientUploadBucket'])) {
            $model->clientUploadBucket = $map['ClientUploadBucket'];
        }
        if (isset($map['ClientUploadPath'])) {
            $model->clientUploadPath = $map['ClientUploadPath'];
        }
        if (isset($map['ClientUploadStorageStatus'])) {
            $model->clientUploadStorageStatus = $map['ClientUploadStorageStatus'];
        }
        if (isset($map['ClientUploadStorageType'])) {
            $model->clientUploadStorageType = $map['ClientUploadStorageType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
