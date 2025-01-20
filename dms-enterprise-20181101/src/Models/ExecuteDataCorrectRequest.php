<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ExecuteDataCorrectRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $actionDetail;
    /**
     * @var int
     */
    public $orderId;
    /**
     * @var string
     */
    public $realLoginUserUid;
    /**
     * @var string
     */
    public $tid;
    protected $_name = [
        'actionDetail'     => 'ActionDetail',
        'orderId'          => 'OrderId',
        'realLoginUserUid' => 'RealLoginUserUid',
        'tid'              => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->actionDetail)) {
            Model::validateArray($this->actionDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionDetail) {
            if (\is_array($this->actionDetail)) {
                $res['ActionDetail'] = [];
                foreach ($this->actionDetail as $key1 => $value1) {
                    $res['ActionDetail'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }

        if (null !== $this->realLoginUserUid) {
            $res['RealLoginUserUid'] = $this->realLoginUserUid;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['ActionDetail'])) {
            if (!empty($map['ActionDetail'])) {
                $model->actionDetail = [];
                foreach ($map['ActionDetail'] as $key1 => $value1) {
                    $model->actionDetail[$key1] = $value1;
                }
            }
        }

        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }

        if (isset($map['RealLoginUserUid'])) {
            $model->realLoginUserUid = $map['RealLoginUserUid'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
