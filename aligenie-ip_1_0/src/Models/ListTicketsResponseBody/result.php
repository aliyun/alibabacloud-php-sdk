<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsResponseBody\result\dialogs;

class result extends Model
{
    /**
     * @var bool
     */
    public $action;

    /**
     * @var string
     */
    public $assignedHandler;

    /**
     * @var string
     */
    public $chargesRemark;

    /**
     * @var string
     */
    public $completeRemark;

    /**
     * @var dialogs[]
     */
    public $dialogs;

    /**
     * @var string
     */
    public $gmtCalled;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtDelayed;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $groupKey;

    /**
     * @var int
     */
    public $id;

    /**
     * @var bool
     */
    public $isAcceptedCharges;

    /**
     * @var bool
     */
    public $isDelayed;

    /**
     * @var bool
     */
    public $isNeedCallback;

    /**
     * @var bool
     */
    public $isNeedCharges;

    /**
     * @var mixed[][]
     */
    public $operations;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var string
     */
    public $roomNo;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'action' => 'Action',
        'assignedHandler' => 'AssignedHandler',
        'chargesRemark' => 'ChargesRemark',
        'completeRemark' => 'CompleteRemark',
        'dialogs' => 'Dialogs',
        'gmtCalled' => 'GmtCalled',
        'gmtCreate' => 'GmtCreate',
        'gmtDelayed' => 'GmtDelayed',
        'gmtModified' => 'GmtModified',
        'groupKey' => 'GroupKey',
        'id' => 'Id',
        'isAcceptedCharges' => 'IsAcceptedCharges',
        'isDelayed' => 'IsDelayed',
        'isNeedCallback' => 'IsNeedCallback',
        'isNeedCharges' => 'IsNeedCharges',
        'operations' => 'Operations',
        'remark' => 'Remark',
        'roomNo' => 'RoomNo',
        'status' => 'Status',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->dialogs)) {
            Model::validateArray($this->dialogs);
        }
        if (\is_array($this->operations)) {
            Model::validateArray($this->operations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->assignedHandler) {
            $res['AssignedHandler'] = $this->assignedHandler;
        }

        if (null !== $this->chargesRemark) {
            $res['ChargesRemark'] = $this->chargesRemark;
        }

        if (null !== $this->completeRemark) {
            $res['CompleteRemark'] = $this->completeRemark;
        }

        if (null !== $this->dialogs) {
            if (\is_array($this->dialogs)) {
                $res['Dialogs'] = [];
                $n1 = 0;
                foreach ($this->dialogs as $item1) {
                    $res['Dialogs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->gmtCalled) {
            $res['GmtCalled'] = $this->gmtCalled;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtDelayed) {
            $res['GmtDelayed'] = $this->gmtDelayed;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->groupKey) {
            $res['GroupKey'] = $this->groupKey;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isAcceptedCharges) {
            $res['IsAcceptedCharges'] = $this->isAcceptedCharges;
        }

        if (null !== $this->isDelayed) {
            $res['IsDelayed'] = $this->isDelayed;
        }

        if (null !== $this->isNeedCallback) {
            $res['IsNeedCallback'] = $this->isNeedCallback;
        }

        if (null !== $this->isNeedCharges) {
            $res['IsNeedCharges'] = $this->isNeedCharges;
        }

        if (null !== $this->operations) {
            if (\is_array($this->operations)) {
                $res['Operations'] = [];
                $n1 = 0;
                foreach ($this->operations as $item1) {
                    if (\is_array($item1)) {
                        $res['Operations'][$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Operations'][$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->roomNo) {
            $res['RoomNo'] = $this->roomNo;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['AssignedHandler'])) {
            $model->assignedHandler = $map['AssignedHandler'];
        }

        if (isset($map['ChargesRemark'])) {
            $model->chargesRemark = $map['ChargesRemark'];
        }

        if (isset($map['CompleteRemark'])) {
            $model->completeRemark = $map['CompleteRemark'];
        }

        if (isset($map['Dialogs'])) {
            if (!empty($map['Dialogs'])) {
                $model->dialogs = [];
                $n1 = 0;
                foreach ($map['Dialogs'] as $item1) {
                    $model->dialogs[$n1] = dialogs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['GmtCalled'])) {
            $model->gmtCalled = $map['GmtCalled'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtDelayed'])) {
            $model->gmtDelayed = $map['GmtDelayed'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['GroupKey'])) {
            $model->groupKey = $map['GroupKey'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsAcceptedCharges'])) {
            $model->isAcceptedCharges = $map['IsAcceptedCharges'];
        }

        if (isset($map['IsDelayed'])) {
            $model->isDelayed = $map['IsDelayed'];
        }

        if (isset($map['IsNeedCallback'])) {
            $model->isNeedCallback = $map['IsNeedCallback'];
        }

        if (isset($map['IsNeedCharges'])) {
            $model->isNeedCharges = $map['IsNeedCharges'];
        }

        if (isset($map['Operations'])) {
            if (!empty($map['Operations'])) {
                $model->operations = [];
                $n1 = 0;
                foreach ($map['Operations'] as $item1) {
                    if (!empty($item1)) {
                        $model->operations[$n1] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->operations[$n1][$key2] = $value2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RoomNo'])) {
            $model->roomNo = $map['RoomNo'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
