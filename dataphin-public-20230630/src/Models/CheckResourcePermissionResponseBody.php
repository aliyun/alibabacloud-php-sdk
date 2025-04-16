<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CheckResourcePermissionResponseBody\resourcePermissionList;

class CheckResourcePermissionResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourcePermissionList[]
     */
    public $resourcePermissionList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'httpStatusCode' => 'HttpStatusCode',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'resourcePermissionList' => 'ResourcePermissionList',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePermissionList)) {
            Model::validateArray($this->resourcePermissionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourcePermissionList) {
            if (\is_array($this->resourcePermissionList)) {
                $res['ResourcePermissionList'] = [];
                $n1 = 0;
                foreach ($this->resourcePermissionList as $item1) {
                    $res['ResourcePermissionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourcePermissionList'])) {
            if (!empty($map['ResourcePermissionList'])) {
                $model->resourcePermissionList = [];
                $n1 = 0;
                foreach ($map['ResourcePermissionList'] as $item1) {
                    $model->resourcePermissionList[$n1++] = resourcePermissionList::fromMap($item1);
                }
            }
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
