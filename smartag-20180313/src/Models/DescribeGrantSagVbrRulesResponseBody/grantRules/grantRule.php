<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagVbrRulesResponseBody\grantRules;

use AlibabaCloud\Dara\Model;

class grantRule extends Model
{
    /**
     * @var bool
     */
    public $bound;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $smartAGId;

    /**
     * @var int
     */
    public $smartAGUid;

    /**
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @var string
     */
    public $vbrRegionId;

    /**
     * @var int
     */
    public $vbrUid;
    protected $_name = [
        'bound' => 'Bound',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'smartAGId' => 'SmartAGId',
        'smartAGUid' => 'SmartAGUid',
        'vbrInstanceId' => 'VbrInstanceId',
        'vbrRegionId' => 'VbrRegionId',
        'vbrUid' => 'VbrUid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }

        if (null !== $this->smartAGUid) {
            $res['SmartAGUid'] = $this->smartAGUid;
        }

        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }

        if (null !== $this->vbrRegionId) {
            $res['VbrRegionId'] = $this->vbrRegionId;
        }

        if (null !== $this->vbrUid) {
            $res['VbrUid'] = $this->vbrUid;
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
        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }

        if (isset($map['SmartAGUid'])) {
            $model->smartAGUid = $map['SmartAGUid'];
        }

        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }

        if (isset($map['VbrRegionId'])) {
            $model->vbrRegionId = $map['VbrRegionId'];
        }

        if (isset($map['VbrUid'])) {
            $model->vbrUid = $map['VbrUid'];
        }

        return $model;
    }
}
