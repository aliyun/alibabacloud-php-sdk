<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ada\V20260701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ada\V20260701\Models\CreateTransitUploadPolicyResponseBody\policyInfo;

class CreateTransitUploadPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $filePath;

    /**
     * @var policyInfo
     */
    public $policyInfo;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $transitId;
    protected $_name = [
        'filePath' => 'FilePath',
        'policyInfo' => 'PolicyInfo',
        'requestId' => 'RequestId',
        'success' => 'Success',
        'transitId' => 'TransitId',
    ];

    public function validate()
    {
        if (null !== $this->policyInfo) {
            $this->policyInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        if (null !== $this->policyInfo) {
            $res['PolicyInfo'] = null !== $this->policyInfo ? $this->policyInfo->toArray($noStream) : $this->policyInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->transitId) {
            $res['TransitId'] = $this->transitId;
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
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        if (isset($map['PolicyInfo'])) {
            $model->policyInfo = policyInfo::fromMap($map['PolicyInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TransitId'])) {
            $model->transitId = $map['TransitId'];
        }

        return $model;
    }
}
