<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;

class ModifyApplicationWhitelistRequest extends Model
{
    /**
     * @var string
     */
    public $applicationId;

    /**
     * @var string
     */
    public $componentId;

    /**
     * @var string
     */
    public $modifyMode;

    /**
     * @var string
     */
    public $securityGroups;

    /**
     * @var string
     */
    public $securityIPArrayName;

    /**
     * @var string
     */
    public $securityIPList;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'componentId' => 'ComponentId',
        'modifyMode' => 'ModifyMode',
        'securityGroups' => 'SecurityGroups',
        'securityIPArrayName' => 'SecurityIPArrayName',
        'securityIPList' => 'SecurityIPList',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->componentId) {
            $res['ComponentId'] = $this->componentId;
        }

        if (null !== $this->modifyMode) {
            $res['ModifyMode'] = $this->modifyMode;
        }

        if (null !== $this->securityGroups) {
            $res['SecurityGroups'] = $this->securityGroups;
        }

        if (null !== $this->securityIPArrayName) {
            $res['SecurityIPArrayName'] = $this->securityIPArrayName;
        }

        if (null !== $this->securityIPList) {
            $res['SecurityIPList'] = $this->securityIPList;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ComponentId'])) {
            $model->componentId = $map['ComponentId'];
        }

        if (isset($map['ModifyMode'])) {
            $model->modifyMode = $map['ModifyMode'];
        }

        if (isset($map['SecurityGroups'])) {
            $model->securityGroups = $map['SecurityGroups'];
        }

        if (isset($map['SecurityIPArrayName'])) {
            $model->securityIPArrayName = $map['SecurityIPArrayName'];
        }

        if (isset($map['SecurityIPList'])) {
            $model->securityIPList = $map['SecurityIPList'];
        }

        return $model;
    }
}
