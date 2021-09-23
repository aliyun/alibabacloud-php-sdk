<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostAccountsFromUserResponseBody\results\hostAccounts;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var hostAccounts[]
     */
    public $hostAccounts;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'hostId'       => 'HostId',
        'userId'       => 'UserId',
        'hostAccounts' => 'HostAccounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->hostAccounts) {
            $res['HostAccounts'] = [];
            if (null !== $this->hostAccounts && \is_array($this->hostAccounts)) {
                $n = 0;
                foreach ($this->hostAccounts as $item) {
                    $res['HostAccounts'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['HostAccounts'])) {
            if (!empty($map['HostAccounts'])) {
                $model->hostAccounts = [];
                $n                   = 0;
                foreach ($map['HostAccounts'] as $item) {
                    $model->hostAccounts[$n++] = null !== $item ? hostAccounts::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
