<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models;

use AlibabaCloud\SDK\PTS\V20201020\Models\GetUserVpcSecurityGroupResponseBody\securityGroupList;
use AlibabaCloud\Tea\Model;

class GetUserVpcSecurityGroupResponseBody extends Model
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
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $securityGroupCount;

    /**
     * @var securityGroupList[]
     */
    public $securityGroupList;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'               => 'Code',
        'httpStatusCode'     => 'HttpStatusCode',
        'message'            => 'Message',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'securityGroupCount' => 'SecurityGroupCount',
        'securityGroupList'  => 'SecurityGroupList',
        'success'            => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->securityGroupCount) {
            $res['SecurityGroupCount'] = $this->securityGroupCount;
        }
        if (null !== $this->securityGroupList) {
            $res['SecurityGroupList'] = [];
            if (null !== $this->securityGroupList && \is_array($this->securityGroupList)) {
                $n = 0;
                foreach ($this->securityGroupList as $item) {
                    $res['SecurityGroupList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserVpcSecurityGroupResponseBody
     */
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
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecurityGroupCount'])) {
            $model->securityGroupCount = $map['SecurityGroupCount'];
        }
        if (isset($map['SecurityGroupList'])) {
            if (!empty($map['SecurityGroupList'])) {
                $model->securityGroupList = [];
                $n                        = 0;
                foreach ($map['SecurityGroupList'] as $item) {
                    $model->securityGroupList[$n++] = null !== $item ? securityGroupList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
