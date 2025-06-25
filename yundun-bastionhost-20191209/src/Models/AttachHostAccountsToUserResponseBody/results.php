<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostAccountsToUserResponseBody\results\hostAccounts;

class results extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var hostAccounts[]
     */
    public $hostAccounts;

    /**
     * @var string
     */
    public $hostId;

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
        'hostAccounts' => 'HostAccounts',
        'hostId' => 'HostId',
        'message' => 'Message',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->hostAccounts)) {
            Model::validateArray($this->hostAccounts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->hostAccounts) {
            if (\is_array($this->hostAccounts)) {
                $res['HostAccounts'] = [];
                $n1 = 0;
                foreach ($this->hostAccounts as $item1) {
                    $res['HostAccounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
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

        if (isset($map['HostAccounts'])) {
            if (!empty($map['HostAccounts'])) {
                $model->hostAccounts = [];
                $n1 = 0;
                foreach ($map['HostAccounts'] as $item1) {
                    $model->hostAccounts[$n1] = hostAccounts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
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
