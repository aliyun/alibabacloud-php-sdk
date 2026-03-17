<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagRulesResponseBody\grantRules;

use AlibabaCloud\Dara\Model;

class grantRule extends Model
{
    /**
     * @var string
     */
    public $ccnInstanceId;

    /**
     * @var int
     */
    public $ccnUid;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $grantTrafficService;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $smartAGId;
    protected $_name = [
        'ccnInstanceId' => 'CcnInstanceId',
        'ccnUid' => 'CcnUid',
        'createTime' => 'CreateTime',
        'grantTrafficService' => 'GrantTrafficService',
        'instanceId' => 'InstanceId',
        'smartAGId' => 'SmartAGId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ccnInstanceId) {
            $res['CcnInstanceId'] = $this->ccnInstanceId;
        }

        if (null !== $this->ccnUid) {
            $res['CcnUid'] = $this->ccnUid;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->grantTrafficService) {
            $res['GrantTrafficService'] = $this->grantTrafficService;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
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
        if (isset($map['CcnInstanceId'])) {
            $model->ccnInstanceId = $map['CcnInstanceId'];
        }

        if (isset($map['CcnUid'])) {
            $model->ccnUid = $map['CcnUid'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['GrantTrafficService'])) {
            $model->grantTrafficService = $map['GrantTrafficService'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        return $model;
    }
}
