<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\downStreamNodeIdList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\filterList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\globalParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\nodeIdList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\nodeParamsList;
use AlibabaCloud\Tea\Model;

class createCommand extends Model
{
    /**
     * @var bool
     */
    public $containAllDownStream;

    /**
     * @var downStreamNodeIdList[]
     */
    public $downStreamNodeIdList;

    /**
     * @description This parameter is required.
     *
     * @example 2021-06-01
     *
     * @var string
     */
    public $endBizDate;

    /**
     * @var filterList[]
     */
    public $filterList;

    /**
     * @var globalParamList[]
     */
    public $globalParamList;

    /**
     * @var string
     */
    public $maxDueTime;

    /**
     * @var string
     */
    public $minDueTime;

    /**
     * @example xx测试
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @var nodeIdList[]
     */
    public $nodeIdList;

    /**
     * @var nodeParamsList[]
     */
    public $nodeParamsList;

    /**
     * @var int
     */
    public $parallelism;

    /**
     * @description This parameter is required.
     *
     * @example 101121
     *
     * @var int
     */
    public $projectId;

    /**
     * @description This parameter is required.
     *
     * @example 2021-06-01
     *
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'containAllDownStream' => 'ContainAllDownStream',
        'downStreamNodeIdList' => 'DownStreamNodeIdList',
        'endBizDate'           => 'EndBizDate',
        'filterList'           => 'FilterList',
        'globalParamList'      => 'GlobalParamList',
        'maxDueTime'           => 'MaxDueTime',
        'minDueTime'           => 'MinDueTime',
        'name'                 => 'Name',
        'nodeIdList'           => 'NodeIdList',
        'nodeParamsList'       => 'NodeParamsList',
        'parallelism'          => 'Parallelism',
        'projectId'            => 'ProjectId',
        'startBizDate'         => 'StartBizDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->containAllDownStream) {
            $res['ContainAllDownStream'] = $this->containAllDownStream;
        }
        if (null !== $this->downStreamNodeIdList) {
            $res['DownStreamNodeIdList'] = [];
            if (null !== $this->downStreamNodeIdList && \is_array($this->downStreamNodeIdList)) {
                $n = 0;
                foreach ($this->downStreamNodeIdList as $item) {
                    $res['DownStreamNodeIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }
        if (null !== $this->filterList) {
            $res['FilterList'] = [];
            if (null !== $this->filterList && \is_array($this->filterList)) {
                $n = 0;
                foreach ($this->filterList as $item) {
                    $res['FilterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->globalParamList) {
            $res['GlobalParamList'] = [];
            if (null !== $this->globalParamList && \is_array($this->globalParamList)) {
                $n = 0;
                foreach ($this->globalParamList as $item) {
                    $res['GlobalParamList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->maxDueTime) {
            $res['MaxDueTime'] = $this->maxDueTime;
        }
        if (null !== $this->minDueTime) {
            $res['MinDueTime'] = $this->minDueTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeIdList) {
            $res['NodeIdList'] = [];
            if (null !== $this->nodeIdList && \is_array($this->nodeIdList)) {
                $n = 0;
                foreach ($this->nodeIdList as $item) {
                    $res['NodeIdList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeParamsList) {
            $res['NodeParamsList'] = [];
            if (null !== $this->nodeParamsList && \is_array($this->nodeParamsList)) {
                $n = 0;
                foreach ($this->nodeParamsList as $item) {
                    $res['NodeParamsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->parallelism) {
            $res['Parallelism'] = $this->parallelism;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainAllDownStream'])) {
            $model->containAllDownStream = $map['ContainAllDownStream'];
        }
        if (isset($map['DownStreamNodeIdList'])) {
            if (!empty($map['DownStreamNodeIdList'])) {
                $model->downStreamNodeIdList = [];
                $n                           = 0;
                foreach ($map['DownStreamNodeIdList'] as $item) {
                    $model->downStreamNodeIdList[$n++] = null !== $item ? downStreamNodeIdList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }
        if (isset($map['FilterList'])) {
            if (!empty($map['FilterList'])) {
                $model->filterList = [];
                $n                 = 0;
                foreach ($map['FilterList'] as $item) {
                    $model->filterList[$n++] = null !== $item ? filterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['GlobalParamList'])) {
            if (!empty($map['GlobalParamList'])) {
                $model->globalParamList = [];
                $n                      = 0;
                foreach ($map['GlobalParamList'] as $item) {
                    $model->globalParamList[$n++] = null !== $item ? globalParamList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MaxDueTime'])) {
            $model->maxDueTime = $map['MaxDueTime'];
        }
        if (isset($map['MinDueTime'])) {
            $model->minDueTime = $map['MinDueTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeIdList'])) {
            if (!empty($map['NodeIdList'])) {
                $model->nodeIdList = [];
                $n                 = 0;
                foreach ($map['NodeIdList'] as $item) {
                    $model->nodeIdList[$n++] = null !== $item ? nodeIdList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeParamsList'])) {
            if (!empty($map['NodeParamsList'])) {
                $model->nodeParamsList = [];
                $n                     = 0;
                foreach ($map['NodeParamsList'] as $item) {
                    $model->nodeParamsList[$n++] = null !== $item ? nodeParamsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Parallelism'])) {
            $model->parallelism = $map['Parallelism'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }

        return $model;
    }
}
