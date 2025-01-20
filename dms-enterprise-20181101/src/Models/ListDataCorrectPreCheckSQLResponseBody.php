<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataCorrectPreCheckSQLResponseBody\preCheckSQLList;

class ListDataCorrectPreCheckSQLResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var preCheckSQLList[]
     */
    public $preCheckSQLList;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'       => 'ErrorCode',
        'errorMessage'    => 'ErrorMessage',
        'preCheckSQLList' => 'PreCheckSQLList',
        'requestId'       => 'RequestId',
        'success'         => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->preCheckSQLList)) {
            Model::validateArray($this->preCheckSQLList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->preCheckSQLList) {
            if (\is_array($this->preCheckSQLList)) {
                $res['PreCheckSQLList'] = [];
                $n1                     = 0;
                foreach ($this->preCheckSQLList as $item1) {
                    $res['PreCheckSQLList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['PreCheckSQLList'])) {
            if (!empty($map['PreCheckSQLList'])) {
                $model->preCheckSQLList = [];
                $n1                     = 0;
                foreach ($map['PreCheckSQLList'] as $item1) {
                    $model->preCheckSQLList[$n1++] = preCheckSQLList::fromMap($item1);
                }
            }
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
