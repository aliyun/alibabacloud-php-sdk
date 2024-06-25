<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QuerySmsSignResponseBody extends Model
{
    /**
     * @description The response code.
     *
     *   If OK is returned, the request is successful.
     *   Other values indicate that the request fails. For more information, see [Error codes](https://help.aliyun.com/document_detail/101346.html).
     *
     * @example OK
     *
     * @var string
     */
    public $code;

    /**
     * @description The date and time when the signature was created.
     *
     * @example 2019-01-08 16:44:13
     *
     * @var string
     */
    public $createDate;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The remarks of the review. Valid values:
     *
     *   If the signature is in the **Approved** or **Pending Approval** state, No Remarks is returned.
     *   If the signature is in the **Not Approved** state, the reason why the signature is rejected is returned.
     *
     * @example The document cannot verify the authenticity of the information. Please upload it again.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The request ID.
     *
     * @example CC89A90C-978F-46AC-B80D-54738371E7CA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The signature.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $signName;

    /**
     * @description The status of the signature. Valid values:
     *
     *   **0**: The signature is pending approval.
     *   **1**: The signature is approved.
     *   **2**: The signature is rejected. The Reason parameter indicates the reason why the signature is rejected.
     *   **10**: The signature is cancelled.
     *
     * @example 1
     *
     * @var int
     */
    public $signStatus;
    protected $_name = [
        'code'       => 'Code',
        'createDate' => 'CreateDate',
        'message'    => 'Message',
        'reason'     => 'Reason',
        'requestId'  => 'RequestId',
        'signName'   => 'SignName',
        'signStatus' => 'SignStatus',
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
        if (null !== $this->createDate) {
            $res['CreateDate'] = $this->createDate;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->signName) {
            $res['SignName'] = $this->signName;
        }
        if (null !== $this->signStatus) {
            $res['SignStatus'] = $this->signStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySmsSignResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreateDate'])) {
            $model->createDate = $map['CreateDate'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SignName'])) {
            $model->signName = $map['SignName'];
        }
        if (isset($map['SignStatus'])) {
            $model->signStatus = $map['SignStatus'];
        }

        return $model;
    }
}
