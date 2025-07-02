<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models;

use AlibabaCloud\Dara\Model;

class SendOpsMessageToTerminalsRequest extends Model
{
    /**
     * @var bool
     */
    public $delay;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $opsAction;

    /**
     * @var string[]
     */
    public $uuids;

    /**
     * @var bool
     */
    public $waitForAck;
    protected $_name = [
        'delay' => 'Delay',
        'msg' => 'Msg',
        'opsAction' => 'OpsAction',
        'uuids' => 'Uuids',
        'waitForAck' => 'WaitForAck',
    ];

    public function validate()
    {
        if (\is_array($this->uuids)) {
            Model::validateArray($this->uuids);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        if (null !== $this->msg) {
            $res['Msg'] = $this->msg;
        }

        if (null !== $this->opsAction) {
            $res['OpsAction'] = $this->opsAction;
        }

        if (null !== $this->uuids) {
            if (\is_array($this->uuids)) {
                $res['Uuids'] = [];
                $n1 = 0;
                foreach ($this->uuids as $item1) {
                    $res['Uuids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->waitForAck) {
            $res['WaitForAck'] = $this->waitForAck;
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
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        if (isset($map['Msg'])) {
            $model->msg = $map['Msg'];
        }

        if (isset($map['OpsAction'])) {
            $model->opsAction = $map['OpsAction'];
        }

        if (isset($map['Uuids'])) {
            if (!empty($map['Uuids'])) {
                $model->uuids = [];
                $n1 = 0;
                foreach ($map['Uuids'] as $item1) {
                    $model->uuids[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WaitForAck'])) {
            $model->waitForAck = $map['WaitForAck'];
        }

        return $model;
    }
}
