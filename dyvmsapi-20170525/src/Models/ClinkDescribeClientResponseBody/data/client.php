<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeClientResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeClientResponseBody\data\client\clidArea;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeClientResponseBody\data\client\permission;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeClientResponseBody\data\client\queues;

class client extends Model
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
     * @var int
     */
    public $autoInvestigation;

    /**
     * @var string
     */
    public $bindTel;

    /**
     * @var string[]
     */
    public $clid;

    /**
     * @var clidArea[]
     */
    public $clidArea;

    /**
     * @var int
     */
    public $clidRule;

    /**
     * @var int
     */
    public $clidType;

    /**
     * @var int
     */
    public $cloudNumberEnabled;

    /**
     * @var int[]
     */
    public $cloudNumberModes;

    /**
     * @var string
     */
    public $cno;

    /**
     * @var string
     */
    public $crmId;

    /**
     * @var string
     */
    public $hiddenTel;

    /**
     * @var int
     */
    public $ibWrapupTime;

    /**
     * @var int
     */
    public $ibWrapupType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $obHangupSms;

    /**
     * @var int
     */
    public $pauseLogin;

    /**
     * @var permission
     */
    public $permission;

    /**
     * @var string[]
     */
    public $qnos;

    /**
     * @var queues[]
     */
    public $queues;

    /**
     * @var int
     */
    public $recurrentselectionType;

    /**
     * @var int
     */
    public $recurrentselectionValue;

    /**
     * @var string
     */
    public $reserveTel;

    /**
     * @var int
     */
    public $role;

    /**
     * @var string[]
     */
    public $serveArea;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $telType;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $wrapupTime;
    protected $_name = [
        'active' => 'Active',
        'areaCode' => 'AreaCode',
        'autoInvestigation' => 'AutoInvestigation',
        'bindTel' => 'BindTel',
        'clid' => 'Clid',
        'clidArea' => 'ClidArea',
        'clidRule' => 'ClidRule',
        'clidType' => 'ClidType',
        'cloudNumberEnabled' => 'CloudNumberEnabled',
        'cloudNumberModes' => 'CloudNumberModes',
        'cno' => 'Cno',
        'crmId' => 'CrmId',
        'hiddenTel' => 'HiddenTel',
        'ibWrapupTime' => 'IbWrapupTime',
        'ibWrapupType' => 'IbWrapupType',
        'name' => 'Name',
        'obHangupSms' => 'ObHangupSms',
        'pauseLogin' => 'PauseLogin',
        'permission' => 'Permission',
        'qnos' => 'Qnos',
        'queues' => 'Queues',
        'recurrentselectionType' => 'RecurrentselectionType',
        'recurrentselectionValue' => 'RecurrentselectionValue',
        'reserveTel' => 'ReserveTel',
        'role' => 'Role',
        'serveArea' => 'ServeArea',
        'status' => 'Status',
        'telType' => 'TelType',
        'type' => 'Type',
        'wrapupTime' => 'WrapupTime',
    ];

    public function validate()
    {
        if (\is_array($this->clid)) {
            Model::validateArray($this->clid);
        }
        if (\is_array($this->clidArea)) {
            Model::validateArray($this->clidArea);
        }
        if (\is_array($this->cloudNumberModes)) {
            Model::validateArray($this->cloudNumberModes);
        }
        if (null !== $this->permission) {
            $this->permission->validate();
        }
        if (\is_array($this->qnos)) {
            Model::validateArray($this->qnos);
        }
        if (\is_array($this->queues)) {
            Model::validateArray($this->queues);
        }
        if (\is_array($this->serveArea)) {
            Model::validateArray($this->serveArea);
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

        if (null !== $this->autoInvestigation) {
            $res['AutoInvestigation'] = $this->autoInvestigation;
        }

        if (null !== $this->bindTel) {
            $res['BindTel'] = $this->bindTel;
        }

        if (null !== $this->clid) {
            if (\is_array($this->clid)) {
                $res['Clid'] = [];
                $n1 = 0;
                foreach ($this->clid as $item1) {
                    $res['Clid'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clidArea) {
            if (\is_array($this->clidArea)) {
                $res['ClidArea'] = [];
                $n1 = 0;
                foreach ($this->clidArea as $item1) {
                    $res['ClidArea'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clidRule) {
            $res['ClidRule'] = $this->clidRule;
        }

        if (null !== $this->clidType) {
            $res['ClidType'] = $this->clidType;
        }

        if (null !== $this->cloudNumberEnabled) {
            $res['CloudNumberEnabled'] = $this->cloudNumberEnabled;
        }

        if (null !== $this->cloudNumberModes) {
            if (\is_array($this->cloudNumberModes)) {
                $res['CloudNumberModes'] = [];
                $n1 = 0;
                foreach ($this->cloudNumberModes as $item1) {
                    $res['CloudNumberModes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cno) {
            $res['Cno'] = $this->cno;
        }

        if (null !== $this->crmId) {
            $res['CrmId'] = $this->crmId;
        }

        if (null !== $this->hiddenTel) {
            $res['HiddenTel'] = $this->hiddenTel;
        }

        if (null !== $this->ibWrapupTime) {
            $res['IbWrapupTime'] = $this->ibWrapupTime;
        }

        if (null !== $this->ibWrapupType) {
            $res['IbWrapupType'] = $this->ibWrapupType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->obHangupSms) {
            $res['ObHangupSms'] = $this->obHangupSms;
        }

        if (null !== $this->pauseLogin) {
            $res['PauseLogin'] = $this->pauseLogin;
        }

        if (null !== $this->permission) {
            $res['Permission'] = null !== $this->permission ? $this->permission->toArray($noStream) : $this->permission;
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

        if (null !== $this->queues) {
            if (\is_array($this->queues)) {
                $res['Queues'] = [];
                $n1 = 0;
                foreach ($this->queues as $item1) {
                    $res['Queues'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recurrentselectionType) {
            $res['RecurrentselectionType'] = $this->recurrentselectionType;
        }

        if (null !== $this->recurrentselectionValue) {
            $res['RecurrentselectionValue'] = $this->recurrentselectionValue;
        }

        if (null !== $this->reserveTel) {
            $res['ReserveTel'] = $this->reserveTel;
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->serveArea) {
            if (\is_array($this->serveArea)) {
                $res['ServeArea'] = [];
                $n1 = 0;
                foreach ($this->serveArea as $item1) {
                    $res['ServeArea'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->telType) {
            $res['TelType'] = $this->telType;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->wrapupTime) {
            $res['WrapupTime'] = $this->wrapupTime;
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

        if (isset($map['AutoInvestigation'])) {
            $model->autoInvestigation = $map['AutoInvestigation'];
        }

        if (isset($map['BindTel'])) {
            $model->bindTel = $map['BindTel'];
        }

        if (isset($map['Clid'])) {
            if (!empty($map['Clid'])) {
                $model->clid = [];
                $n1 = 0;
                foreach ($map['Clid'] as $item1) {
                    $model->clid[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ClidArea'])) {
            if (!empty($map['ClidArea'])) {
                $model->clidArea = [];
                $n1 = 0;
                foreach ($map['ClidArea'] as $item1) {
                    $model->clidArea[$n1] = clidArea::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClidRule'])) {
            $model->clidRule = $map['ClidRule'];
        }

        if (isset($map['ClidType'])) {
            $model->clidType = $map['ClidType'];
        }

        if (isset($map['CloudNumberEnabled'])) {
            $model->cloudNumberEnabled = $map['CloudNumberEnabled'];
        }

        if (isset($map['CloudNumberModes'])) {
            if (!empty($map['CloudNumberModes'])) {
                $model->cloudNumberModes = [];
                $n1 = 0;
                foreach ($map['CloudNumberModes'] as $item1) {
                    $model->cloudNumberModes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Cno'])) {
            $model->cno = $map['Cno'];
        }

        if (isset($map['CrmId'])) {
            $model->crmId = $map['CrmId'];
        }

        if (isset($map['HiddenTel'])) {
            $model->hiddenTel = $map['HiddenTel'];
        }

        if (isset($map['IbWrapupTime'])) {
            $model->ibWrapupTime = $map['IbWrapupTime'];
        }

        if (isset($map['IbWrapupType'])) {
            $model->ibWrapupType = $map['IbWrapupType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ObHangupSms'])) {
            $model->obHangupSms = $map['ObHangupSms'];
        }

        if (isset($map['PauseLogin'])) {
            $model->pauseLogin = $map['PauseLogin'];
        }

        if (isset($map['Permission'])) {
            $model->permission = permission::fromMap($map['Permission']);
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

        if (isset($map['Queues'])) {
            if (!empty($map['Queues'])) {
                $model->queues = [];
                $n1 = 0;
                foreach ($map['Queues'] as $item1) {
                    $model->queues[$n1] = queues::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RecurrentselectionType'])) {
            $model->recurrentselectionType = $map['RecurrentselectionType'];
        }

        if (isset($map['RecurrentselectionValue'])) {
            $model->recurrentselectionValue = $map['RecurrentselectionValue'];
        }

        if (isset($map['ReserveTel'])) {
            $model->reserveTel = $map['ReserveTel'];
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['ServeArea'])) {
            if (!empty($map['ServeArea'])) {
                $model->serveArea = [];
                $n1 = 0;
                foreach ($map['ServeArea'] as $item1) {
                    $model->serveArea[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TelType'])) {
            $model->telType = $map['TelType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['WrapupTime'])) {
            $model->wrapupTime = $map['WrapupTime'];
        }

        return $model;
    }
}
