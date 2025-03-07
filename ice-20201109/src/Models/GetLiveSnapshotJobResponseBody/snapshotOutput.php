<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveSnapshotJobResponseBody;

use AlibabaCloud\Tea\Model;

class snapshotOutput extends Model
{
    /**
     * @description The bucket of the output endpoint. If the storage type is set to oss, the OSS bucket is returned.
     *
     * @example testbucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The output endpoint. If the storage type is set to oss, the Object Storage Service (OSS) domain name is returned.
     *
     * @example oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The storage type. The value can only be oss.
     *
     * @example oss
     *
     * @var string
     */
    public $storageType;
    protected $_name = [
        'bucket'      => 'Bucket',
        'endpoint'    => 'Endpoint',
        'storageType' => 'StorageType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->storageType) {
            $res['StorageType'] = $this->storageType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['StorageType'])) {
            $model->storageType = $map['StorageType'];
        }

        return $model;
    }
}
