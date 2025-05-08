<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class GenerateExecutionPolicyResponseBody extends Model
{
    /**
     * @var string
     */
    public $missingPolicy;

    /**
     * @var string
     */
    public $policy;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'missingPolicy' => 'MissingPolicy',
        'policy' => 'Policy',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->missingPolicy) {
            $res['MissingPolicy'] = $this->missingPolicy;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MissingPolicy'])) {
            $model->missingPolicy = $map['MissingPolicy'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
