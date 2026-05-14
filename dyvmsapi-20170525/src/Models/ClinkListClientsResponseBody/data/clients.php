<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkListClientsResponseBody\data;

use AlibabaCloud\Dara\Model;

class clients extends Model
{
    /**
     * @var int
     */
    public $active;

    /**
     * @var string
     */
    public $areaCode;

    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $crmId;

    /**
     * @var int
     */
    public $hiddenTel;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $qnos;

    /**
     * @var int
     */
    public $role;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'active' => 'Active',
        'areaCode' => 'AreaCode',
        'bindTel' => 'BindTel',
        'cno' => 'Cno',
        'createTime' => 'CreateTime',
        'crmId' => 'CrmId',
        'hiddenTel' => 'HiddenTel',
        'id' => 'Id',
        'name' => 'Name',
        'qnos' => 'Qnos',
        'role' => 'Role',
        'status' => 'Status',
        'type' => 'Type',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (\is_array($this->qnos)) {
            Model::validateArray($this->qnos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }

        if (null !== $this->areaCode) {
            $res['AreaCode'] = $this->areaCode;
        }

        if (null !== $this->bindTel) {
            $res['BindTel'] = $this->bindTel;
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->crmId) {
            $res['CrmId'] = $this->crmId;
        }

        if (null !== $this->hiddenTel) {
            $res['HiddenTel'] = $this->hiddenTel;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->qnos) {
            if (\is_array($this->qnos)) {
                $res['Qnos'] = [];
                $n1 = 0;
                foreach ($this->qnos as $item1) {
                    $res['Qnos'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }

        if (isset($map['AreaCode'])) {
            $model->areaCode = $map['AreaCode'];
        }

        if (isset($map['BindTel'])) {
            $model->bindTel = $map['BindTel'];
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['CrmId'])) {
            $model->crmId = $map['CrmId'];
        }

        if (isset($map['HiddenTel'])) {
            $model->hiddenTel = $map['HiddenTel'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Qnos'])) {
            if (!empty($map['Qnos'])) {
                $model->qnos = [];
                $n1 = 0;
                foreach ($map['Qnos'] as $item1) {
                    $model->qnos[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
