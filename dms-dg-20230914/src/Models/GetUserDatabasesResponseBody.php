<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\SDK\Dmsdg\V20230914\Models\GetUserDatabasesResponseBody\dbInstanceList;
use AlibabaCloud\Tea\Model;

class GetUserDatabasesResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 100
     *
     * @var int
     */
    public $count;

    /**
     * @var dbInstanceList
     */
    public $dbInstanceList;

    /**
     * @example Gateway exception, please launch local dg first
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example 514F794F-7E30-5DAA-97C0-0B0D75DA0259
     *
     * @var string
     */
    public $requestId;

    /**
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'count'          => 'Count',
        'dbInstanceList' => 'DbInstanceList',
        'errorMsg'       => 'ErrorMsg',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->dbInstanceList) {
            $res['DbInstanceList'] = null !== $this->dbInstanceList ? $this->dbInstanceList->toMap() : null;
        }
        if (null !== $this->errorMsg) {
            $res['ErrorMsg'] = $this->errorMsg;
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
     * @return GetUserDatabasesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['DbInstanceList'])) {
            $model->dbInstanceList = dbInstanceList::fromMap($map['DbInstanceList']);
        }
        if (isset($map['ErrorMsg'])) {
            $model->errorMsg = $map['ErrorMsg'];
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
