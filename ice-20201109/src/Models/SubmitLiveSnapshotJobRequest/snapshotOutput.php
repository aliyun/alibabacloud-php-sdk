<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveSnapshotJobRequest;

use AlibabaCloud\Tea\Model;

class snapshotOutput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example testbucket
     *
     * @var string
     */
    public $bucket;

    /**
     * @description This parameter is required.
     *
     * @example oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description This parameter is required.
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
