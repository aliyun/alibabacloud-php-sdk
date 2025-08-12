<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class SendMessageToGroupUsersRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $data;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $operatorUserId;

    /**
     * @var string[]
     */
    public $receiverIdList;

    /**
     * @var bool
     */
    public $skipAudit;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'appId' => 'AppId',
        'data' => 'Data',
        'groupId' => 'GroupId',
        'operatorUserId' => 'OperatorUserId',
        'receiverIdList' => 'ReceiverIdList',
        'skipAudit' => 'SkipAudit',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->receiverIdList)) {
            Model::validateArray($this->receiverIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->operatorUserId) {
            $res['OperatorUserId'] = $this->operatorUserId;
        }

        if (null !== $this->receiverIdList) {
            if (\is_array($this->receiverIdList)) {
                $res['ReceiverIdList'] = [];
                $n1 = 0;
                foreach ($this->receiverIdList as $item1) {
                    $res['ReceiverIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skipAudit) {
            $res['SkipAudit'] = $this->skipAudit;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['OperatorUserId'])) {
            $model->operatorUserId = $map['OperatorUserId'];
        }

        if (isset($map['ReceiverIdList'])) {
            if (!empty($map['ReceiverIdList'])) {
                $model->receiverIdList = [];
                $n1 = 0;
                foreach ($map['ReceiverIdList'] as $item1) {
                    $model->receiverIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SkipAudit'])) {
            $model->skipAudit = $map['SkipAudit'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
