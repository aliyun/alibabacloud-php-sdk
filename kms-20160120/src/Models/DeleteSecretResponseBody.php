<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretResponseBody extends Model
{
    /**
     * @description The time when the secret is scheduled to be deleted.
     *
     * @example 2022-09-15T07:02:14Z
     *
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 38bbed2a-15e0-45ad-98d4-816ad2ccf4ea
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The name of the secret.
     *
     * @example secret001
     *
     * @var string
     */
    public $secretName;
    protected $_name = [
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'requestId'         => 'RequestId',
        'secretName'        => 'SecretName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->plannedDeleteTime) {
            $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSecretResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }

        return $model;
    }
}
