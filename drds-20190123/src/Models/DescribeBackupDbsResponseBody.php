<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupDbsResponseBody\dbNames;

class DescribeBackupDbsResponseBody extends Model
{
    /**
     * @var dbNames
     */
    public $dbNames;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'dbNames' => 'DbNames',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->dbNames) {
            $this->dbNames->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbNames) {
            $res['DbNames'] = null !== $this->dbNames ? $this->dbNames->toArray($noStream) : $this->dbNames;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['DbNames'])) {
            $model->dbNames = dbNames::fromMap($map['DbNames']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
