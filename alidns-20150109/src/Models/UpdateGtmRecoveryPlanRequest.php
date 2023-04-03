<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmRecoveryPlanRequest extends Model
{
    /**
     * @description The list of faulty address pools.
     *
     * @example ["hra0or"]
     *
     * @var string
     */
    public $faultAddrPool;

    /**
     * @description The language in which you want the values of some response parameters to be returned. These response parameters support multiple languages.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The name of the disaster recovery plan.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the disaster recovery plan.
     *
     * @example 100
     *
     * @var int
     */
    public $recoveryPlanId;

    /**
     * @description The remarks about the disaster recovery plan.
     *
     * @example remark
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'faultAddrPool'  => 'FaultAddrPool',
        'lang'           => 'Lang',
        'name'           => 'Name',
        'recoveryPlanId' => 'RecoveryPlanId',
        'remark'         => 'Remark',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->faultAddrPool) {
            $res['FaultAddrPool'] = $this->faultAddrPool;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->recoveryPlanId) {
            $res['RecoveryPlanId'] = $this->recoveryPlanId;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGtmRecoveryPlanRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FaultAddrPool'])) {
            $model->faultAddrPool = $map['FaultAddrPool'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RecoveryPlanId'])) {
            $model->recoveryPlanId = $map['RecoveryPlanId'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
