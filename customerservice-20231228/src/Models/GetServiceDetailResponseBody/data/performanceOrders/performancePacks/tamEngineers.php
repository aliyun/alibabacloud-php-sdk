<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\GetServiceDetailResponseBody\data\performanceOrders\performancePacks;

use AlibabaCloud\Tea\Model;

class tamEngineers extends Model
{
    /**
     * @var string
     */
    public $creatorEmpId;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $hrStatus;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $lastName;

    /**
     * @var string
     */
    public $modifierEmpId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nickNameEn;

    /**
     * @var int
     */
    public $realmId;

    /**
     * @var string
     */
    public $workid;
    protected $_name = [
        'creatorEmpId'  => 'creatorEmpId',
        'gmtCreate'     => 'gmtCreate',
        'gmtModified'   => 'gmtModified',
        'hrStatus'      => 'hrStatus',
        'id'            => 'id',
        'lastName'      => 'lastName',
        'modifierEmpId' => 'modifierEmpId',
        'name'          => 'name',
        'nickNameEn'    => 'nickNameEn',
        'realmId'       => 'realmId',
        'workid'        => 'workid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorEmpId) {
            $res['creatorEmpId'] = $this->creatorEmpId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hrStatus) {
            $res['hrStatus'] = $this->hrStatus;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->lastName) {
            $res['lastName'] = $this->lastName;
        }
        if (null !== $this->modifierEmpId) {
            $res['modifierEmpId'] = $this->modifierEmpId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nickNameEn) {
            $res['nickNameEn'] = $this->nickNameEn;
        }
        if (null !== $this->realmId) {
            $res['realmId'] = $this->realmId;
        }
        if (null !== $this->workid) {
            $res['workid'] = $this->workid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tamEngineers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorEmpId'])) {
            $model->creatorEmpId = $map['creatorEmpId'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['hrStatus'])) {
            $model->hrStatus = $map['hrStatus'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['lastName'])) {
            $model->lastName = $map['lastName'];
        }
        if (isset($map['modifierEmpId'])) {
            $model->modifierEmpId = $map['modifierEmpId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['nickNameEn'])) {
            $model->nickNameEn = $map['nickNameEn'];
        }
        if (isset($map['realmId'])) {
            $model->realmId = $map['realmId'];
        }
        if (isset($map['workid'])) {
            $model->workid = $map['workid'];
        }

        return $model;
    }
}
