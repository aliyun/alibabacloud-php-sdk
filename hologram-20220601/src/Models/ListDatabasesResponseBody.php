<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Hologram\V20220601\Models\ListDatabasesResponseBody\databaseList;

class ListDatabasesResponseBody extends Model
{
    /**
     * @var databaseList[]
     */
    public $databaseList;

    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var string
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $success;
    protected $_name = [
        'databaseList' => 'DatabaseList',
        'errorCode' => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->databaseList)) {
            Model::validateArray($this->databaseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->databaseList) {
            if (\is_array($this->databaseList)) {
                $res['DatabaseList'] = [];
                $n1 = 0;
                foreach ($this->databaseList as $item1) {
                    $res['DatabaseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }

        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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
        if (isset($map['DatabaseList'])) {
            if (!empty($map['DatabaseList'])) {
                $model->databaseList = [];
                $n1 = 0;
                foreach ($map['DatabaseList'] as $item1) {
                    $model->databaseList[$n1] = databaseList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }

        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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
