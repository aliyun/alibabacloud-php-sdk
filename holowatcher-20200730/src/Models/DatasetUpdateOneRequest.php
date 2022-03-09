<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models;

use AlibabaCloud\Tea\Model;

class DatasetUpdateOneRequest extends Model
{
    /**
     * @var string
     */
    public $aliyunJwt;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $typeId;
    protected $_name = [
        'aliyunJwt' => 'AliyunJwt',
        'bizType'   => 'BizType',
        'datasetId' => 'DatasetId',
        'status'    => 'Status',
        'typeId'    => 'TypeId',
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
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->datasetId) {
            $res['DatasetId'] = $this->datasetId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DatasetUpdateOneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliyunJwt'])) {
            $model->aliyunJwt = $map['AliyunJwt'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DatasetId'])) {
            $model->datasetId = $map['DatasetId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }

        return $model;
    }
}
