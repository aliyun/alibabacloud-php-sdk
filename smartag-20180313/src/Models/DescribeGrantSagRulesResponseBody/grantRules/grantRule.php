<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagRulesResponseBody\grantRules;

use AlibabaCloud\Tea\Model;

class grantRule extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var bool
     */
    public $grantTrafficService;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $ccnUid;

    /**
     * @var string
     */
    public $ccnInstanceId;
    protected $_name = [
        'createTime'          => 'CreateTime',
        'smartAGId'           => 'SmartAGId',
        'grantTrafficService' => 'GrantTrafficService',
        'instanceId'          => 'InstanceId',
        'ccnUid'              => 'CcnUid',
        'ccnInstanceId'       => 'CcnInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->grantTrafficService) {
            $res['GrantTrafficService'] = $this->grantTrafficService;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->ccnUid) {
            $res['CcnUid'] = $this->ccnUid;
        }
        if (null !== $this->ccnInstanceId) {
            $res['CcnInstanceId'] = $this->ccnInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return grantRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['GrantTrafficService'])) {
            $model->grantTrafficService = $map['GrantTrafficService'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['CcnUid'])) {
            $model->ccnUid = $map['CcnUid'];
        }
        if (isset($map['CcnInstanceId'])) {
            $model->ccnInstanceId = $map['CcnInstanceId'];
        }

        return $model;
    }
}
