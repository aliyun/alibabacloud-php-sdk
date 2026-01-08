<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListBindDmAccountResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\ListBindDmAccountResponseBody\data\extendAttr;

class data extends Model
{
    /**
     * @var string
     */
    public $accountCode;

    /**
     * @var extendAttr
     */
    public $extendAttr;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'accountCode' => 'AccountCode',
        'extendAttr' => 'ExtendAttr',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
        if (null !== $this->extendAttr) {
            $this->extendAttr->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountCode) {
            $res['AccountCode'] = $this->accountCode;
        }

        if (null !== $this->extendAttr) {
            $res['ExtendAttr'] = null !== $this->extendAttr ? $this->extendAttr->toArray($noStream) : $this->extendAttr;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (isset($map['AccountCode'])) {
            $model->accountCode = $map['AccountCode'];
        }

        if (isset($map['ExtendAttr'])) {
            $model->extendAttr = extendAttr::fromMap($map['ExtendAttr']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
