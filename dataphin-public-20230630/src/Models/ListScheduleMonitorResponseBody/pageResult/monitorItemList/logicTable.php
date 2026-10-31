<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListScheduleMonitorResponseBody\pageResult\monitorItemList;

use AlibabaCloud\Dara\Model;

class logicTable extends Model
{
    /**
     * @var int
     */
    public $bizUnitId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nodeSubType;

    /**
     * @var string[]
     */
    public $ownerIdList;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $schedulePeriodType;

    /**
     * @var bool
     */
    public $supportDataDelay;
    protected $_name = [
        'bizUnitId' => 'BizUnitId',
        'id' => 'Id',
        'name' => 'Name',
        'nodeSubType' => 'NodeSubType',
        'ownerIdList' => 'OwnerIdList',
        'projectName' => 'ProjectName',
        'schedulePeriodType' => 'SchedulePeriodType',
        'supportDataDelay' => 'SupportDataDelay',
    ];

    public function validate()
    {
        if (\is_array($this->ownerIdList)) {
            Model::validateArray($this->ownerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitId) {
            $res['BizUnitId'] = $this->bizUnitId;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nodeSubType) {
            $res['NodeSubType'] = $this->nodeSubType;
        }

        if (null !== $this->ownerIdList) {
            if (\is_array($this->ownerIdList)) {
                $res['OwnerIdList'] = [];
                $n1 = 0;
                foreach ($this->ownerIdList as $item1) {
                    $res['OwnerIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->schedulePeriodType) {
            $res['SchedulePeriodType'] = $this->schedulePeriodType;
        }

        if (null !== $this->supportDataDelay) {
            $res['SupportDataDelay'] = $this->supportDataDelay;
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
        if (isset($map['BizUnitId'])) {
            $model->bizUnitId = $map['BizUnitId'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NodeSubType'])) {
            $model->nodeSubType = $map['NodeSubType'];
        }

        if (isset($map['OwnerIdList'])) {
            if (!empty($map['OwnerIdList'])) {
                $model->ownerIdList = [];
                $n1 = 0;
                foreach ($map['OwnerIdList'] as $item1) {
                    $model->ownerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['SchedulePeriodType'])) {
            $model->schedulePeriodType = $map['SchedulePeriodType'];
        }

        if (isset($map['SupportDataDelay'])) {
            $model->supportDataDelay = $map['SupportDataDelay'];
        }

        return $model;
    }
}
