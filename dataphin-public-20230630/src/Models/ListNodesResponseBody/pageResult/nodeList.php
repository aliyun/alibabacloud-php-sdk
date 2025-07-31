<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\modifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\ownerList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListNodesResponseBody\pageResult\nodeList\projectInfo;
use AlibabaCloud\Tea\Model;

class nodeList extends Model
{
    /**
     * @var string
     */
    public $bizUnitName;

    /**
     * @example 2024-05-30 16:47:13
     *
     * @var string
     */
    public $createTime;

    /**
     * @var creator
     */
    public $creator;

    /**
     * @example xx test
     *
     * @var string
     */
    public $description;

    /**
     * @example true
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example {"xx":"zz"}
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @example DATA_PROCESS
     *
     * @var string
     */
    public $from;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasDev;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasProd;

    /**
     * @example n_31111
     *
     * @var string
     */
    public $id;

    /**
     * @example 2024-05-30 16:47:13
     *
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
     * @example true
     *
     * @var bool
     */
    public $schedulePaused;

    /**
     * @var string[]
     */
    public $schedulePeriodList;

    /**
     * @example SHELL
     *
     * @var string
     */
    public $subDetailType;

    /**
     * @example DATA_PROCESS
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizUnitName) {
            $res['BizUnitName'] = $this->bizUnitName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->creator) {
            $res['Creator'] = null !== $this->creator ? $this->creator->toMap() : null;
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
            $res['Modifier'] = null !== $this->modifier ? $this->modifier->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerList) {
            $res['OwnerList'] = [];
            if (null !== $this->ownerList && \is_array($this->ownerList)) {
                $n = 0;
                foreach ($this->ownerList as $item) {
                    $res['OwnerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->priorityList) {
            $res['PriorityList'] = $this->priorityList;
        }
        if (null !== $this->projectInfo) {
            $res['ProjectInfo'] = null !== $this->projectInfo ? $this->projectInfo->toMap() : null;
        }
        if (null !== $this->schedulePaused) {
            $res['SchedulePaused'] = $this->schedulePaused;
        }
        if (null !== $this->schedulePeriodList) {
            $res['SchedulePeriodList'] = $this->schedulePeriodList;
        }
        if (null !== $this->subDetailType) {
            $res['SubDetailType'] = $this->subDetailType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeList
     */
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
                $n = 0;
                foreach ($map['OwnerList'] as $item) {
                    $model->ownerList[$n++] = null !== $item ? ownerList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PriorityList'])) {
            if (!empty($map['PriorityList'])) {
                $model->priorityList = $map['PriorityList'];
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
                $model->schedulePeriodList = $map['SchedulePeriodList'];
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
