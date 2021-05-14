<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupDbsResponseBody\dbNames;
use AlibabaCloud\Tea\Model;

class DescribeBackupDbsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var dbNames
     */
    public $dbNames;
    protected $_name = [
        'success'   => 'Success',
        'requestId' => 'RequestId',
        'dbNames'   => 'DbNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->dbNames) {
            $res['DbNames'] = null !== $this->dbNames ? $this->dbNames->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBackupDbsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DbNames'])) {
            $model->dbNames = dbNames::fromMap($map['DbNames']);
        }

        return $model;
    }
}
