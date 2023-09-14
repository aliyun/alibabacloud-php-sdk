<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class QueryCrossBorderApprovalStatusResponseBody extends Model
{
    /**
     * @description Cross border permissions of Alibaba Cloud account (main account).
     *
     * -  PASSED : Cross-border permission review passed.
     * @example UNAPPLIED
     *
     * @var string
     */
    public $approvalStatus;

    /**
     * @description The ID of the request.
     *
     * @example F96E634B-A523-587F-9A09-AE8B2FD04B9C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'approvalStatus' => 'ApprovalStatus',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->approvalStatus) {
            $res['ApprovalStatus'] = $this->approvalStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryCrossBorderApprovalStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApprovalStatus'])) {
            $model->approvalStatus = $map['ApprovalStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
