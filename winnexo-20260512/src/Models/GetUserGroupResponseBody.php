<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class GetUserGroupResponseBody extends Model
{
    /**
     * @var mixed[]
     */
    public $childGroups;

    /**
     * @var string
     */
    public $code;

    /**
     * @var mixed[]
     */
    public $members;

    /**
     * @var string
     */
    public $message;

    /**
     * @var mixed
     */
    public $parentGroup;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed
     */
    public $userGroup;
    protected $_name = [
        'childGroups' => 'childGroups',
        'code' => 'code',
        'members' => 'members',
        'message' => 'message',
        'parentGroup' => 'parentGroup',
        'requestId' => 'requestId',
        'userGroup' => 'userGroup',
    ];

    public function validate()
    {
        if (\is_array($this->childGroups)) {
            Model::validateArray($this->childGroups);
        }
        if (\is_array($this->members)) {
            Model::validateArray($this->members);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childGroups) {
            if (\is_array($this->childGroups)) {
                $res['childGroups'] = [];
                $n1 = 0;
                foreach ($this->childGroups as $item1) {
                    $res['childGroups'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->members) {
            if (\is_array($this->members)) {
                $res['members'] = [];
                $n1 = 0;
                foreach ($this->members as $item1) {
                    $res['members'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->parentGroup) {
            $res['parentGroup'] = $this->parentGroup;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->userGroup) {
            $res['userGroup'] = $this->userGroup;
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
        if (isset($map['childGroups'])) {
            if (!empty($map['childGroups'])) {
                $model->childGroups = [];
                $n1 = 0;
                foreach ($map['childGroups'] as $item1) {
                    $model->childGroups[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['members'])) {
            if (!empty($map['members'])) {
                $model->members = [];
                $n1 = 0;
                foreach ($map['members'] as $item1) {
                    $model->members[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['parentGroup'])) {
            $model->parentGroup = $map['parentGroup'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['userGroup'])) {
            $model->userGroup = $map['userGroup'];
        }

        return $model;
    }
}
