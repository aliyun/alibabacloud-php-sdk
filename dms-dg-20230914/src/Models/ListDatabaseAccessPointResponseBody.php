<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsdg\V20230914\Models;

use AlibabaCloud\SDK\Dmsdg\V20230914\Models\ListDatabaseAccessPointResponseBody\dbInstanceAccessPointList;
use AlibabaCloud\Tea\Model;

class ListDatabaseAccessPointResponseBody extends Model
{
    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @var dbInstanceAccessPointList[]
     */
    public $dbInstanceAccessPointList;

    /**
     * @example Gateway exception, please launch local dg first
     *
     * @var string
     */
    public $errorMsg;

    /**
     * @example C9ADD2AA-27E3-5D62-A676-092EDC5303C1
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
        'code'                      => 'Code',
        'count'                     => 'Count',
        'dbInstanceAccessPointList' => 'DbInstanceAccessPointList',
        'errorMsg'                  => 'ErrorMsg',
        'requestId'                 => 'RequestId',
        'success'                   => 'Success',
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
        if (null !== $this->dbInstanceAccessPointList) {
            $res['DbInstanceAccessPointList'] = [];
            if (null !== $this->dbInstanceAccessPointList && \is_array($this->dbInstanceAccessPointList)) {
                $n = 0;
                foreach ($this->dbInstanceAccessPointList as $item) {
                    $res['DbInstanceAccessPointList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return ListDatabaseAccessPointResponseBody
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
        if (isset($map['DbInstanceAccessPointList'])) {
            if (!empty($map['DbInstanceAccessPointList'])) {
                $model->dbInstanceAccessPointList = [];
                $n                                = 0;
                foreach ($map['DbInstanceAccessPointList'] as $item) {
                    $model->dbInstanceAccessPointList[$n++] = null !== $item ? dbInstanceAccessPointList::fromMap($item) : $item;
                }
            }
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
