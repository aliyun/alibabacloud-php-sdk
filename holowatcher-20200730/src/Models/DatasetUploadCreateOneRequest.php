<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DatasetUploadCreateOneRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $deviceKey;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'datasetId' => 'DatasetId',
        'deviceKey' => 'DeviceKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliyunJwt) {
            $res['AliyunJwt'] = $this->aliyunJwt;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->deviceKey) {
            $res['DeviceKey'] = $this->deviceKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetUploadCreateOneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['DeviceKey'])) {
            $model->deviceKey = $map['DeviceKey'];
        }

        return $model;
    }
}
