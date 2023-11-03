<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class OperateBucketScanTaskRequest extends Model
{
    /**
     * @example iboxpublic****
     *
     * @var string
     */
    public $bucketName;

    /**
     * @example 1
     *
     * @var int
     */
    public $operateCode;
    protected $_name = [
        'bucketName'  => 'BucketName',
        'operateCode' => 'OperateCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OperateBucketScanTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }

        return $model;
    }
}
