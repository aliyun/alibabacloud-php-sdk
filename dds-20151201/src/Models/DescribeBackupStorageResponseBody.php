<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;

class DescribeBackupStorageResponseBody extends Model
{
    /**
     * @var int
     */
    public $freeSize;
    /**
     * @var int
     */
    public $fullStorageSize;
    /**
     * @var int
     */
    public $logStorageSize;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'freeSize'        => 'FreeSize',
        'fullStorageSize' => 'FullStorageSize',
        'logStorageSize'  => 'LogStorageSize',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->freeSize) {
            $res['FreeSize'] = $this->freeSize;
        }

        if (null !== $this->fullStorageSize) {
            $res['FullStorageSize'] = $this->fullStorageSize;
        }

        if (null !== $this->logStorageSize) {
            $res['LogStorageSize'] = $this->logStorageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['FreeSize'])) {
            $model->freeSize = $map['FreeSize'];
        }

        if (isset($map['FullStorageSize'])) {
            $model->fullStorageSize = $map['FullStorageSize'];
        }

        if (isset($map['LogStorageSize'])) {
            $model->logStorageSize = $map['LogStorageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
