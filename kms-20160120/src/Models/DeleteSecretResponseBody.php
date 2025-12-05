<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class DeleteSecretResponseBody extends Model
{
    /**
     * @var string
     */
    public $plannedDeleteTime;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $secretName;
    protected $_name = [
        'plannedDeleteTime' => 'PlannedDeleteTime',
        'requestId' => 'RequestId',
        'secretName' => 'SecretName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
