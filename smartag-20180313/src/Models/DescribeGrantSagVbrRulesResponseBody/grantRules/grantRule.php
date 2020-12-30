<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeGrantSagVbrRulesResponseBody\grantRules;

use AlibabaCloud\Tea\Model;

class grantRule extends Model
{
    /**
     * @var string
     */
    public $vbrInstanceId;

    /**
     * @var int
     */
    public $vbrUid;

    /**
     * @var string
     */
    public $vbrRegionId;

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
    public $bound;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $smartAGUid;
    protected $_name = [
        'vbrInstanceId' => 'VbrInstanceId',
        'vbrUid'        => 'VbrUid',
        'vbrRegionId'   => 'VbrRegionId',
        'createTime'    => 'CreateTime',
        'smartAGId'     => 'SmartAGId',
        'bound'         => 'Bound',
        'instanceId'    => 'InstanceId',
        'smartAGUid'    => 'SmartAGUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vbrInstanceId) {
            $res['VbrInstanceId'] = $this->vbrInstanceId;
        }
        if (null !== $this->vbrUid) {
            $res['VbrUid'] = $this->vbrUid;
        }
        if (null !== $this->vbrRegionId) {
            $res['VbrRegionId'] = $this->vbrRegionId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->smartAGId) {
            $res['SmartAGId'] = $this->smartAGId;
        }
        if (null !== $this->bound) {
            $res['Bound'] = $this->bound;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->smartAGUid) {
            $res['SmartAGUid'] = $this->smartAGUid;
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
        if (isset($map['VbrInstanceId'])) {
            $model->vbrInstanceId = $map['VbrInstanceId'];
        }
        if (isset($map['VbrUid'])) {
            $model->vbrUid = $map['VbrUid'];
        }
        if (isset($map['VbrRegionId'])) {
            $model->vbrRegionId = $map['VbrRegionId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SmartAGId'])) {
            $model->smartAGId = $map['SmartAGId'];
        }
        if (isset($map['Bound'])) {
            $model->bound = $map['Bound'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SmartAGUid'])) {
            $model->smartAGUid = $map['SmartAGUid'];
        }

        return $model;
    }
}
