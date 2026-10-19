<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetMemoryDetailResponseBody\groups;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\GetMemoryDetailResponseBody\profile;

class GetMemoryDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var groups[]
     */
    public $groups;

    /**
     * @var string
     */
    public $message;

    /**
     * @var profile
     */
    public $profile;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'code',
        'groups' => 'groups',
        'message' => 'message',
        'profile' => 'profile',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->groups)) {
            Model::validateArray($this->groups);
        }
        if (null !== $this->profile) {
            $this->profile->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->groups) {
            if (\is_array($this->groups)) {
                $res['groups'] = [];
                $n1 = 0;
                foreach ($this->groups as $item1) {
                    $res['groups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->profile) {
            $res['profile'] = null !== $this->profile ? $this->profile->toArray($noStream) : $this->profile;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['groups'])) {
            if (!empty($map['groups'])) {
                $model->groups = [];
                $n1 = 0;
                foreach ($map['groups'] as $item1) {
                    $model->groups[$n1] = groups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['profile'])) {
            $model->profile = profile::fromMap($map['profile']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
