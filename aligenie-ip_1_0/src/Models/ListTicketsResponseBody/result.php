<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsResponseBody;

use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\ListTicketsResponseBody\result\dialogs;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $action;

    /**
     * @example ***
     *
     * @var string
     */
    public $assignedHandler;

    /**
     * @example ***
     *
     * @var string
     */
    public $chargesRemark;

    /**
     * @example ***
     *
     * @var string
     */
    public $completeRemark;

    /**
     * @var dialogs[]
     */
    public $dialogs;

    /**
     * @example 2023-01-09 00:00:00
     *
     * @var string
     */
    public $gmtCalled;

    /**
     * @example 2023-01-09 00:00:00
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2023-01-09 00:00:00
     *
     * @var string
     */
    public $gmtDelayed;

    /**
     * @example 2023-01-09 00:00:00
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 2023***93975
     *
     * @var string
     */
    public $groupKey;

    /**
     * @example 45
     *
     * @var int
     */
    public $id;

    /**
     * @example false
     *
     * @var bool
     */
    public $isAcceptedCharges;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDelayed;

    /**
     * @example false
     *
     * @var bool
     */
    public $isNeedCallback;

    /**
     * @example false
     *
     * @var bool
     */
    public $isNeedCharges;

    /**
     * @var mixed[][]
     */
    public $operations;

    /**
     * @example ***
     *
     * @var string
     */
    public $remark;

    /**
     * @example 101
     *
     * @var string
     */
    public $roomNo;

    /**
     * @example waiting
     *
     * @var string
     */
    public $status;

    /**
     * @example ""
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action'            => 'Action',
        'assignedHandler'   => 'AssignedHandler',
        'chargesRemark'     => 'ChargesRemark',
        'completeRemark'    => 'CompleteRemark',
        'dialogs'           => 'Dialogs',
        'gmtCalled'         => 'GmtCalled',
        'gmtCreate'         => 'GmtCreate',
        'gmtDelayed'        => 'GmtDelayed',
        'gmtModified'       => 'GmtModified',
        'groupKey'          => 'GroupKey',
        'id'                => 'Id',
        'isAcceptedCharges' => 'IsAcceptedCharges',
        'isDelayed'         => 'IsDelayed',
        'isNeedCallback'    => 'IsNeedCallback',
        'isNeedCharges'     => 'IsNeedCharges',
        'operations'        => 'Operations',
        'remark'            => 'Remark',
        'roomNo'            => 'RoomNo',
        'status'            => 'Status',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Dialogs'] = [];
            if (null !== $this->dialogs && \is_array($this->dialogs)) {
                $n = 0;
                foreach ($this->dialogs as $item) {
                    $res['Dialogs'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Operations'] = $this->operations;
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

    /**
     * @param array $map
     *
     * @return result
     */
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
                $n              = 0;
                foreach ($map['Dialogs'] as $item) {
                    $model->dialogs[$n++] = null !== $item ? dialogs::fromMap($item) : $item;
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
                $model->operations = $map['Operations'];
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
