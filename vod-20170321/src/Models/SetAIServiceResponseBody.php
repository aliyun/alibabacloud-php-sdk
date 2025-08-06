<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SetAIServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $failedTypes;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $successTypes;
    protected $_name = [
        'failedTypes' => 'FailedTypes',
        'requestId' => 'RequestId',
        'successTypes' => 'SuccessTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failedTypes) {
            $res['FailedTypes'] = $this->failedTypes;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->successTypes) {
            $res['SuccessTypes'] = $this->successTypes;
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
        if (isset($map['FailedTypes'])) {
            $model->failedTypes = $map['FailedTypes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuccessTypes'])) {
            $model->successTypes = $map['SuccessTypes'];
        }

        return $model;
    }
}
