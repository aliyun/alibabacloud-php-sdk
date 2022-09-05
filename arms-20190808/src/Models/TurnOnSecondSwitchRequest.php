<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class TurnOnSecondSwitchRequest extends Model
{
    /**
     * @var string
     */
    public $pid;

    /**
     * @var string
     */
    public $proxyUserId;

    /**
     * @var int
     */
    public $releaseStartTime;
    protected $_name = [
        'pid'              => 'Pid',
        'proxyUserId'      => 'ProxyUserId',
        'releaseStartTime' => 'ReleaseStartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pid) {
            $res['Pid'] = $this->pid;
        }
        if (null !== $this->proxyUserId) {
            $res['ProxyUserId'] = $this->proxyUserId;
        }
        if (null !== $this->releaseStartTime) {
            $res['ReleaseStartTime'] = $this->releaseStartTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TurnOnSecondSwitchRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pid'])) {
            $model->pid = $map['Pid'];
        }
        if (isset($map['ProxyUserId'])) {
            $model->proxyUserId = $map['ProxyUserId'];
        }
        if (isset($map['ReleaseStartTime'])) {
            $model->releaseStartTime = $map['ReleaseStartTime'];
        }

        return $model;
    }
}
