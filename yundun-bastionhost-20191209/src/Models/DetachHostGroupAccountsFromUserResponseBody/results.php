<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\DetachHostGroupAccountsFromUserResponseBody\results\hostAccountNames;
use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var hostAccountNames[]
     */
    public $hostAccountNames;

    /**
     * @var string
     */
    public $userId;

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
    public $hostGroupId;
    protected $_name = [
        'hostAccountNames' => 'HostAccountNames',
        'userId'           => 'UserId',
        'code'             => 'Code',
        'message'          => 'Message',
        'hostGroupId'      => 'HostGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostAccountNames) {
            $res['HostAccountNames'] = [];
            if (null !== $this->hostAccountNames && \is_array($this->hostAccountNames)) {
                $n = 0;
                foreach ($this->hostAccountNames as $item) {
                    $res['HostAccountNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
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
        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = [];
                $n                       = 0;
                foreach ($map['HostAccountNames'] as $item) {
                    $model->hostAccountNames[$n++] = null !== $item ? hostAccountNames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }

        return $model;
    }
}
