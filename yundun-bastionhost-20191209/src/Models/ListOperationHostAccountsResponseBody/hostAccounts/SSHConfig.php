<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\ListOperationHostAccountsResponseBody\hostAccounts;

use AlibabaCloud\Tea\Model;

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
        'enableSSHChannel'  => 'EnableSSHChannel',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return SSHConfig
     */
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
