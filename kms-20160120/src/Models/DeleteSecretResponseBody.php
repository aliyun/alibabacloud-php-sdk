<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class DeleteSecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $secretName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $plannedDeleteTime;
    protected $_name = [
        'secretName'        => 'SecretName',
        'requestId'         => 'RequestId',
        'plannedDeleteTime' => 'PlannedDeleteTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->secretName) {
            $res['SecretName'] = $this->secretName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->plannedDeleteTime) {
            $res['PlannedDeleteTime'] = $this->plannedDeleteTime;
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
        if (isset($map['SecretName'])) {
            $model->secretName = $map['SecretName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PlannedDeleteTime'])) {
            $model->plannedDeleteTime = $map['PlannedDeleteTime'];
        }

        return $model;
    }
}
