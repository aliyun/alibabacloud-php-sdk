<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliyunAuth\V20181222\Models\AuthenticateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliyunAuth\V20181222\Models\AuthenticateResponseBody\data\userInputList;

class data extends Model
{
    /**
     * @var bool
     */
    public $authorized;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $operateCode;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $recordVid;

    /**
     * @var userInputList
     */
    public $userInputList;
    protected $_name = [
        'authorized' => 'Authorized',
        'instanceId' => 'InstanceId',
        'operateCode' => 'OperateCode',
        'productCode' => 'ProductCode',
        'recordVid' => 'RecordVid',
        'userInputList' => 'UserInputList',
    ];

    public function validate()
    {
        if (null !== $this->userInputList) {
            $this->userInputList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->operateCode) {
            $res['OperateCode'] = $this->operateCode;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->recordVid) {
            $res['RecordVid'] = $this->recordVid;
        }

        if (null !== $this->userInputList) {
            $res['UserInputList'] = null !== $this->userInputList ? $this->userInputList->toArray($noStream) : $this->userInputList;
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
        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OperateCode'])) {
            $model->operateCode = $map['OperateCode'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['RecordVid'])) {
            $model->recordVid = $map['RecordVid'];
        }

        if (isset($map['UserInputList'])) {
            $model->userInputList = userInputList::fromMap($map['UserInputList']);
        }

        return $model;
    }
}
