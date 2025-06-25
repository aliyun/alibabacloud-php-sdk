<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsResponseBody\hostAccounts;

use AlibabaCloud\Dara\Model;

class SSHConfig extends Model
{
    /**
     * @var bool
     */
    public $enableSFTPChannel;

    /**
     * @var bool
     */
    public $enableSSHChannel;
    protected $_name = [
        'enableSFTPChannel' => 'EnableSFTPChannel',
        'enableSSHChannel' => 'EnableSSHChannel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableSFTPChannel) {
            $res['EnableSFTPChannel'] = $this->enableSFTPChannel;
        }

        if (null !== $this->enableSSHChannel) {
            $res['EnableSSHChannel'] = $this->enableSSHChannel;
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
        if (isset($map['EnableSFTPChannel'])) {
            $model->enableSFTPChannel = $map['EnableSFTPChannel'];
        }

        if (isset($map['EnableSSHChannel'])) {
            $model->enableSSHChannel = $map['EnableSSHChannel'];
        }

        return $model;
    }
}
