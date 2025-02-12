<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class SetDomainWebSocketStatusRequest extends Model
{
    /**
     * @var string
     */
    public $actionValue;
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $securityToken;
    /**
     * @var string
     */
    public $WSSEnable;
    protected $_name = [
        'actionValue'   => 'ActionValue',
        'domainName'    => 'DomainName',
        'groupId'       => 'GroupId',
        'securityToken' => 'SecurityToken',
        'WSSEnable'     => 'WSSEnable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actionValue) {
            $res['ActionValue'] = $this->actionValue;
        }

        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->WSSEnable) {
            $res['WSSEnable'] = $this->WSSEnable;
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
        if (isset($map['ActionValue'])) {
            $model->actionValue = $map['ActionValue'];
        }

        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['WSSEnable'])) {
            $model->WSSEnable = $map['WSSEnable'];
        }

        return $model;
    }
}
