<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class GetDataAPIServiceDetailRequest extends Model
{
    /**
     * @var string
     */
    public $apiSrn;

    /**
     * @var string
     */
    public $iotInstanceId;
    protected $_name = [
        'apiSrn'        => 'ApiSrn',
        'iotInstanceId' => 'IotInstanceId',
    ];

    public function validate()
    {
        Model::validateRequired('apiSrn', $this->apiSrn, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiSrn) {
            $res['ApiSrn'] = $this->apiSrn;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataAPIServiceDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiSrn'])) {
            $model->apiSrn = $map['ApiSrn'];
        }
        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        return $model;
    }
}
