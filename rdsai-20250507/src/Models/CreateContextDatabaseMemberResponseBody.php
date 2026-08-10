<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\CreateContextDatabaseMemberResponseBody\member;

class CreateContextDatabaseMemberResponseBody extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var member
     */
    public $member;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'apiKey' => 'ApiKey',
        'member' => 'Member',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->member) {
            $this->member->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiKey) {
            $res['ApiKey'] = $this->apiKey;
        }

        if (null !== $this->member) {
            $res['Member'] = null !== $this->member ? $this->member->toArray($noStream) : $this->member;
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
        if (isset($map['ApiKey'])) {
            $model->apiKey = $map['ApiKey'];
        }

        if (isset($map['Member'])) {
            $model->member = member::fromMap($map['Member']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
