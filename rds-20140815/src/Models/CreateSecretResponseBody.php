<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateSecretResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example DF4961DD-16F5-5B24-BD4C-0C7788F7ADAF
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the credential for the created Data API account.
     *
     * @example acs:rds:cn-hangzhou:1335786***:dbInstance/rm-bp1m7l3j63****
     *
     * @var string
     */
    public $secretArn;

    /**
     * @description The name of the credential.
     *
     * @example Foo
     *
     * @var string
     */
    public $secretName;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**: The request was successful.
     *   **false**: The request failed.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'requestId'  => 'RequestId',
        'secretArn'  => 'SecretArn',
        'secretName' => 'SecretName',
        'success'    => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretArn) {
            $res['SecretArn'] = $this->secretArn;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretArn'])) {
            $model->secretArn = $map['SecretArn'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
