<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeBackupDbsResponseBody\dbNames;
use AlibabaCloud\Tea\Model;

class DescribeBackupDbsResponseBody extends Model
{
    /**
     * @description The details about a database.
     *
     * @var dbNames
     */
    public $dbNames;

    /**
     * @description The ID of the request.
     *
     * @example 842DFA7F-B09B-42A2-B115-E684AE******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of request.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'dbNames'   => 'DbNames',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbNames) {
            $res['DbNames'] = null !== $this->dbNames ? $this->dbNames->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
