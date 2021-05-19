<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scsp\V20200702\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomerRequest extends Model
{
    /**
     * @var int
     */
    public $prodLineId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $typeCode;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $managerName;

    /**
     * @var string
     */
    public $contacter;

    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $position;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $dingding;

    /**
     * @var string
     */
    public $outerId;

    /**
     * @var int
     */
    public $outerIdType;
    protected $_name = [
        'prodLineId'  => 'ProdLineId',
        'bizType'     => 'BizType',
        'name'        => 'Name',
        'typeCode'    => 'TypeCode',
        'phone'       => 'Phone',
        'instanceId'  => 'InstanceId',
        'managerName' => 'ManagerName',
        'contacter'   => 'Contacter',
        'industry'    => 'Industry',
        'position'    => 'Position',
        'email'       => 'Email',
        'dingding'    => 'Dingding',
        'outerId'     => 'OuterId',
        'outerIdType' => 'OuterIdType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prodLineId) {
            $res['ProdLineId'] = $this->prodLineId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->managerName) {
            $res['ManagerName'] = $this->managerName;
        }
        if (null !== $this->contacter) {
            $res['Contacter'] = $this->contacter;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }
        if (null !== $this->dingding) {
            $res['Dingding'] = $this->dingding;
        }
        if (null !== $this->outerId) {
            $res['OuterId'] = $this->outerId;
        }
        if (null !== $this->outerIdType) {
            $res['OuterIdType'] = $this->outerIdType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProdLineId'])) {
            $model->prodLineId = $map['ProdLineId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ManagerName'])) {
            $model->managerName = $map['ManagerName'];
        }
        if (isset($map['Contacter'])) {
            $model->contacter = $map['Contacter'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }
        if (isset($map['Dingding'])) {
            $model->dingding = $map['Dingding'];
        }
        if (isset($map['OuterId'])) {
            $model->outerId = $map['OuterId'];
        }
        if (isset($map['OuterIdType'])) {
            $model->outerIdType = $map['OuterIdType'];
        }

        return $model;
    }
}
