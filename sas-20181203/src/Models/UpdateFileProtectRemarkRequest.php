<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateFileProtectRemarkRequest extends Model
{
    /**
     * @var int[]
     */
    public $alertLevels;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int[]
     */
    public $idList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $internetIp;

    /**
     * @var string
     */
    public $intranetIp;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string[]
     */
    public $remark;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @var bool
     */
    public $selectAllAcrossPages;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'alertLevels' => 'AlertLevels',
        'endTime' => 'EndTime',
        'id' => 'Id',
        'idList' => 'IdList',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'internetIp' => 'InternetIp',
        'intranetIp' => 'IntranetIp',
        'operation' => 'Operation',
        'remark' => 'Remark',
        'ruleName' => 'RuleName',
        'selectAllAcrossPages' => 'SelectAllAcrossPages',
        'startTime' => 'StartTime',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->alertLevels)) {
            Model::validateArray($this->alertLevels);
        }
        if (\is_array($this->idList)) {
            Model::validateArray($this->idList);
        }
        if (\is_array($this->remark)) {
            Model::validateArray($this->remark);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertLevels) {
            if (\is_array($this->alertLevels)) {
                $res['AlertLevels'] = [];
                $n1 = 0;
                foreach ($this->alertLevels as $item1) {
                    $res['AlertLevels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->idList) {
            if (\is_array($this->idList)) {
                $res['IdList'] = [];
                $n1 = 0;
                foreach ($this->idList as $item1) {
                    $res['IdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }

        if (null !== $this->intranetIp) {
            $res['IntranetIp'] = $this->intranetIp;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->remark) {
            if (\is_array($this->remark)) {
                $res['Remark'] = [];
                $n1 = 0;
                foreach ($this->remark as $item1) {
                    $res['Remark'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        if (null !== $this->selectAllAcrossPages) {
            $res['SelectAllAcrossPages'] = $this->selectAllAcrossPages;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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
        if (isset($map['AlertLevels'])) {
            if (!empty($map['AlertLevels'])) {
                $model->alertLevels = [];
                $n1 = 0;
                foreach ($map['AlertLevels'] as $item1) {
                    $model->alertLevels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IdList'])) {
            if (!empty($map['IdList'])) {
                $model->idList = [];
                $n1 = 0;
                foreach ($map['IdList'] as $item1) {
                    $model->idList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }

        if (isset($map['IntranetIp'])) {
            $model->intranetIp = $map['IntranetIp'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Remark'])) {
            if (!empty($map['Remark'])) {
                $model->remark = [];
                $n1 = 0;
                foreach ($map['Remark'] as $item1) {
                    $model->remark[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        if (isset($map['SelectAllAcrossPages'])) {
            $model->selectAllAcrossPages = $map['SelectAllAcrossPages'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
