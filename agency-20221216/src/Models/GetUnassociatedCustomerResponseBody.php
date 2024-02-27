<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponseBody\inviteInfoList;
use AlibabaCloud\SDK\Agency\V20221216\Models\GetUnassociatedCustomerResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class GetUnassociatedCustomerResponseBody extends Model
{
    /**
     * @description Error Code, Candidate Value：
     * 200: OK
     * 1109: System error
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description List of Invitation Information
     *
     * @var inviteInfoList
     */
    public $inviteInfoList;

    /**
     * @description Message information
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description Pagination Information
     *
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @description Request ID, Alibaba Cloud will track errors with this.
     *
     * @example 23309219-4A34-589D-A3E0-9B2A3BFFD24F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Candidate Value: True/False, which indicates whether the current API call itself is successful. It does not guarantee the success of subsequent business operations.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'inviteInfoList' => 'InviteInfoList',
        'message'        => 'Message',
        'pageInfo'       => 'PageInfo',
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
        if (null !== $this->inviteInfoList) {
            $res['InviteInfoList'] = null !== $this->inviteInfoList ? $this->inviteInfoList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
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
     * @return GetUnassociatedCustomerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['InviteInfoList'])) {
            $model->inviteInfoList = inviteInfoList::fromMap($map['InviteInfoList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
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
