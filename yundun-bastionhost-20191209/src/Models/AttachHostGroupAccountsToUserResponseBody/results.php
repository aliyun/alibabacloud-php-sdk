<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserResponseBody\results\hostAccountNames;

class results extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var hostAccountNames[]
     */
    public $hostAccountNames;

    /**
     * @var string
     */
    public $hostGroupId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'code' => 'Code',
        'hostAccountNames' => 'HostAccountNames',
        'hostGroupId' => 'HostGroupId',
        'message' => 'Message',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->hostAccountNames)) {
            Model::validateArray($this->hostAccountNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->hostAccountNames) {
            if (\is_array($this->hostAccountNames)) {
                $res['HostAccountNames'] = [];
                $n1 = 0;
                foreach ($this->hostAccountNames as $item1) {
                    $res['HostAccountNames'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = [];
                $n1 = 0;
                foreach ($map['HostAccountNames'] as $item1) {
                    $model->hostAccountNames[$n1] = hostAccountNames::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
