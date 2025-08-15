<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OssMfd\V20231017\Models;

use AlibabaCloud\Dara\Model;

class OperateBucketScanTaskRequest extends Model
{
    /**
     * @var string
     */
    public $bucketName;

    /**
     * @var int
     */
    public $operateCode;
    protected $_name = [
        'bucketName' => 'BucketName',
        'operateCode' => 'OperateCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
