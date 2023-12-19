<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class GenerateRamPolicyResponseBody extends Model
{
    /**
     * @description The HTTP status code. The status code 200 indicates that the call is successful.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The message that is returned. If the call is successful, "successful" is returned. If the call fails, an error message is returned.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The content of the policy.
     *
     * @example {     "Version": "1",     "Statement": [         {             "Effect": "Deny",             "Action": [                 "hbr:CreateRestore",                 "hbr:CreateRestoreJob",                 "hbr:CreateHanaRestore",                 "hbr:CreateUniRestorePlan",                 "hbr:CreateSqlServerRestore"             ],             "Resource": [                 "acs:hbr:*:1178******531:vault/v-000******blx06",                 "acs:hbr:*:1178******531:vault/v-000******blx06/client/*"             ]         }     ] }
     *
     * @var string
     */
    public $policyDocument;

    /**
     * @description The ID of the request.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call is successful.
     *
     *   true: The call is successful.
     *   false: The call fails.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'           => 'Code',
        'message'        => 'Message',
        'policyDocument' => 'PolicyDocument',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->policyDocument) {
            $res['PolicyDocument'] = $this->policyDocument;
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
     * @return GenerateRamPolicyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PolicyDocument'])) {
            $model->policyDocument = $map['PolicyDocument'];
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
