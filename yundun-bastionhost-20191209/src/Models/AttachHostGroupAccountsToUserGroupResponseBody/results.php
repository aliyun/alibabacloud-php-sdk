<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserGroupResponseBody;

use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\AttachHostGroupAccountsToUserGroupResponseBody\results\hostAccountNames;
use AlibabaCloud\Tea\Model;

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
    public $userGroupId;
    protected $_name = [
        'code'             => 'Code',
        'hostAccountNames' => 'HostAccountNames',
        'hostGroupId'      => 'HostGroupId',
        'message'          => 'Message',
        'userGroupId'      => 'UserGroupId',
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
        if (null !== $this->hostAccountNames) {
            $res['HostAccountNames'] = [];
            if (null !== $this->hostAccountNames && \is_array($this->hostAccountNames)) {
                $n = 0;
                foreach ($this->hostAccountNames as $item) {
                    $res['HostAccountNames'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hostGroupId) {
            $res['HostGroupId'] = $this->hostGroupId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->userGroupId) {
            $res['UserGroupId'] = $this->userGroupId;
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
        if (isset($map['HostAccountNames'])) {
            if (!empty($map['HostAccountNames'])) {
                $model->hostAccountNames = [];
                $n                       = 0;
                foreach ($map['HostAccountNames'] as $item) {
                    $model->hostAccountNames[$n++] = null !== $item ? hostAccountNames::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HostGroupId'])) {
            $model->hostGroupId = $map['HostGroupId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['UserGroupId'])) {
            $model->userGroupId = $map['UserGroupId'];
        }

        return $model;
    }
}
