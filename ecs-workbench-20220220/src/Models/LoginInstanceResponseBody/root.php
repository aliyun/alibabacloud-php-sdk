<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody;

use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\disposableAccount;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\instanceLoginInfoList;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\sessionControl;
use AlibabaCloud\Tea\Model;

class root extends Model
{
    /**
     * @var disposableAccount
     */
    public $disposableAccount;

    /**
     * @var instanceLoginInfoList[]
     */
    public $instanceLoginInfoList;

    /**
     * @var sessionControl
     */
    public $sessionControl;
    protected $_name = [
        'disposableAccount'     => 'DisposableAccount',
        'instanceLoginInfoList' => 'InstanceLoginInfoList',
        'sessionControl'        => 'SessionControl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disposableAccount) {
            $res['DisposableAccount'] = null !== $this->disposableAccount ? $this->disposableAccount->toMap() : null;
        }
        if (null !== $this->instanceLoginInfoList) {
            $res['InstanceLoginInfoList'] = [];
            if (null !== $this->instanceLoginInfoList && \is_array($this->instanceLoginInfoList)) {
                $n = 0;
                foreach ($this->instanceLoginInfoList as $item) {
                    $res['InstanceLoginInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sessionControl) {
            $res['SessionControl'] = null !== $this->sessionControl ? $this->sessionControl->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return root
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisposableAccount'])) {
            $model->disposableAccount = disposableAccount::fromMap($map['DisposableAccount']);
        }
        if (isset($map['InstanceLoginInfoList'])) {
            if (!empty($map['InstanceLoginInfoList'])) {
                $model->instanceLoginInfoList = [];
                $n                            = 0;
                foreach ($map['InstanceLoginInfoList'] as $item) {
                    $model->instanceLoginInfoList[$n++] = null !== $item ? instanceLoginInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SessionControl'])) {
            $model->sessionControl = sessionControl::fromMap($map['SessionControl']);
        }

        return $model;
    }
}
