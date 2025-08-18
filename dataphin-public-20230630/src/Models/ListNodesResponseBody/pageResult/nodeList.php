<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\modifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\ownerList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\projectInfo;

class nodeList extends Model
{
    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var string
     */
    public $from;

    /**
     * @var bool
     */
    public $hasDev;

    /**
     * @var bool
     */
    public $hasProd;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var modifier
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var ownerList[]
     */
    public $ownerList;

    /**
     * @var string[]
     */
    public $priorityList;

    /**
     * @var projectInfo
     */
    public $projectInfo;

    /**
     * @var bool
     */
    public $schedulePaused;

    /**
     * @var string[]
     */
    public $schedulePeriodList;

    /**
     * @var string
     */
    public $subDetailType;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnitName' => 'BizUnitName',
        'createTime' => 'CreateTime',
        'creator' => 'Creator',
        'description' => 'Description',
        'dryRun' => 'DryRun',
        'extendInfo' => 'ExtendInfo',
        'from' => 'From',
        'hasDev' => 'HasDev',
        'hasProd' => 'HasProd',
        'id' => 'Id',
        'lastModifiedTime' => 'LastModifiedTime',
        'modifier' => 'Modifier',
        'name' => 'Name',
        'ownerList' => 'OwnerList',
        'priorityList' => 'PriorityList',
        'projectInfo' => 'ProjectInfo',
        'schedulePaused' => 'SchedulePaused',
        'schedulePeriodList' => 'SchedulePeriodList',
        'subDetailType' => 'SubDetailType',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->creator) {
            $this->creator->validate();
        }
        if (null !== $this->modifier) {
            $this->modifier->validate();
        }
        if (\is_array($this->ownerList)) {
            Model::validateArray($this->ownerList);
        }
        if (\is_array($this->priorityList)) {
            Model::validateArray($this->priorityList);
        }
        if (null !== $this->projectInfo) {
            $this->projectInfo->validate();
        }
        if (\is_array($this->schedulePeriodList)) {
            Model::validateArray($this->schedulePeriodList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toArray($noStream) : $this->creator;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->extendInfo) {
            $res['ExtendInfo'] = $this->extendInfo;
        }

        if (null !== $this->from) {
            $res['From'] = $this->from;
        }

        if (null !== $this->hasDev) {
            $res['HasDev'] = $this->hasDev;
        }

        if (null !== $this->hasProd) {
            $res['HasProd'] = $this->hasProd;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toArray($noStream) : $this->modifier;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->ownerList) {
            if (\is_array($this->ownerList)) {
                $res['OwnerList'] = [];
                $n1 = 0;
                foreach ($this->ownerList as $item1) {
                    $res['OwnerList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priorityList) {
            if (\is_array($this->priorityList)) {
                $res['PriorityList'] = [];
                $n1 = 0;
                foreach ($this->priorityList as $item1) {
                    $res['PriorityList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectInfo) {
            $res['ProjectInfo'] = null !== $this->projectInfo ? $this->projectInfo->toArray($noStream) : $this->projectInfo;
        }

        if (null !== $this->schedulePaused) {
            $res['SchedulePaused'] = $this->schedulePaused;
        }

        if (null !== $this->schedulePeriodList) {
            if (\is_array($this->schedulePeriodList)) {
                $res['SchedulePeriodList'] = [];
                $n1 = 0;
                foreach ($this->schedulePeriodList as $item1) {
                    $res['SchedulePeriodList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subDetailType) {
            $res['SubDetailType'] = $this->subDetailType;
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
        if (isset($map['BizUnitName'])) {
            $model->bizUnitName = $map['BizUnitName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Creator'])) {
            $model->creator = creator::fromMap($map['Creator']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['ExtendInfo'])) {
            $model->extendInfo = $map['ExtendInfo'];
        }

        if (isset($map['From'])) {
            $model->from = $map['From'];
        }

        if (isset($map['HasDev'])) {
            $model->hasDev = $map['HasDev'];
        }

        if (isset($map['HasProd'])) {
            $model->hasProd = $map['HasProd'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = modifier::fromMap($map['Modifier']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['OwnerList'])) {
            if (!empty($map['OwnerList'])) {
                $model->ownerList = [];
                $n1 = 0;
                foreach ($map['OwnerList'] as $item1) {
                    $model->ownerList[$n1] = ownerList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PriorityList'])) {
            if (!empty($map['PriorityList'])) {
                $model->priorityList = [];
                $n1 = 0;
                foreach ($map['PriorityList'] as $item1) {
                    $model->priorityList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectInfo'])) {
            $model->projectInfo = projectInfo::fromMap($map['ProjectInfo']);
        }

        if (isset($map['SchedulePaused'])) {
            $model->schedulePaused = $map['SchedulePaused'];
        }

        if (isset($map['SchedulePeriodList'])) {
            if (!empty($map['SchedulePeriodList'])) {
                $model->schedulePeriodList = [];
                $n1 = 0;
                foreach ($map['SchedulePeriodList'] as $item1) {
                    $model->schedulePeriodList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SubDetailType'])) {
            $model->subDetailType = $map['SubDetailType'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
