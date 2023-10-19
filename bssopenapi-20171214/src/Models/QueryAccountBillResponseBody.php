<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryAccountBillResponseBody\data;
use AlibabaCloud\Tea\Model;

class QueryAccountBillResponseBody extends Model
{
    /**
     * @description The granularity at which bills are queried. Valid values:
     *
     *   MONTHLY: queries bills by month. The data queried is consistent with the data that is displayed for the specified billing cycle on the Billing Details tab of the Bill Details page in User Center.
     *   DAILY: queries bills by day. The data queried is consistent with the data that is displayed for the specified day on the Billing Details tab of the Bill Details page in User Center.
     *
     * You must set the BillingDate parameter before you can set the Granularity parameter to DAILY.
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the request.
     *
     * @var data
     */
    public $data;

    /**
     * @description The billing date. This parameter is required only if the Granularity parameter is set to DAILY. Format: YYYY-MM-DD.
     *
     * @example Successful!
     *
     * @var string
     */
    public $message;

    /**
     * @description The status code returned.
     *
     * @example 3BFC23FE-A182-4D96-A1E4-7521B30B8E43
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The message returned.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
     * @return QueryAccountBillResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = data::fromMap($map['Data']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
