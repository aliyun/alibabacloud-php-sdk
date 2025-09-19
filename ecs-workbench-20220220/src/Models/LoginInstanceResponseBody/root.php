<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\disposableAccount;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\instanceLoginInfoList;
use AlibabaCloud\SDK\Ecsworkbench\V20220220\Models\LoginInstanceResponseBody\root\sessionControl;

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
        'disposableAccount' => 'DisposableAccount',
        'instanceLoginInfoList' => 'InstanceLoginInfoList',
        'sessionControl' => 'SessionControl',
    ];

    public function validate()
    {
        if (null !== $this->disposableAccount) {
            $this->disposableAccount->validate();
        }
        if (\is_array($this->instanceLoginInfoList)) {
            Model::validateArray($this->instanceLoginInfoList);
        }
        if (null !== $this->sessionControl) {
            $this->sessionControl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disposableAccount) {
            $res['DisposableAccount'] = null !== $this->disposableAccount ? $this->disposableAccount->toArray($noStream) : $this->disposableAccount;
        }

        if (null !== $this->instanceLoginInfoList) {
            if (\is_array($this->instanceLoginInfoList)) {
                $res['InstanceLoginInfoList'] = [];
                $n1 = 0;
                foreach ($this->instanceLoginInfoList as $item1) {
                    $res['InstanceLoginInfoList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sessionControl) {
            $res['SessionControl'] = null !== $this->sessionControl ? $this->sessionControl->toArray($noStream) : $this->sessionControl;
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
        if (isset($map['DisposableAccount'])) {
            $model->disposableAccount = disposableAccount::fromMap($map['DisposableAccount']);
        }

        if (isset($map['InstanceLoginInfoList'])) {
            if (!empty($map['InstanceLoginInfoList'])) {
                $model->instanceLoginInfoList = [];
                $n1 = 0;
                foreach ($map['InstanceLoginInfoList'] as $item1) {
                    $model->instanceLoginInfoList[$n1] = instanceLoginInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SessionControl'])) {
            $model->sessionControl = sessionControl::fromMap($map['SessionControl']);
        }

        return $model;
    }
}
