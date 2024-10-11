<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesResponseBody\pageResult\data;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesResponseBody\pageResult\data\nodeInfo\creator;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesResponseBody\pageResult\data\nodeInfo\modifier;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListInstancesResponseBody\pageResult\data\nodeInfo\ownerList;
use AlibabaCloud\Tea\Model;

class nodeInfo extends Model
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
     * @var string
     */
    public $description;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @example DATA_PROCES
     *
     * @var string
     */
    public $from;

    /**
     * @example false
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
     * @example n_132331
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
     * @var string[]
     */
    public $resourceGroupList;

    /**
     * @example false
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
     * @example DATA_PROCES
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'bizUnitName'        => 'BizUnitName',
        'createTime'         => 'CreateTime',
        'creator'            => 'Creator',
        'description'        => 'Description',
        'dryRun'             => 'DryRun',
        'from'               => 'From',
        'hasDev'             => 'HasDev',
        'hasProd'            => 'HasProd',
        'id'                 => 'Id',
        'lastModifiedTime'   => 'LastModifiedTime',
        'modifier'           => 'Modifier',
        'name'               => 'Name',
        'ownerList'          => 'OwnerList',
        'priorityList'       => 'PriorityList',
        'resourceGroupList'  => 'ResourceGroupList',
        'schedulePaused'     => 'SchedulePaused',
        'schedulePeriodList' => 'SchedulePeriodList',
        'subDetailType'      => 'SubDetailType',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->resourceGroupList) {
            $res['ResourceGroupList'] = $this->resourceGroupList;
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
     * @return nodeInfo
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
                $n                = 0;
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
        if (isset($map['ResourceGroupList'])) {
            if (!empty($map['ResourceGroupList'])) {
                $model->resourceGroupList = $map['ResourceGroupList'];
            }
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
