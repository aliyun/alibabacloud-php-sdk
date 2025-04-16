<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\downStreamNodeIdList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\filterList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\globalParamList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\nodeIdList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\CreateNodeSupplementRequest\createCommand\nodeParamsList;

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
     * @var string
     */
    public $name;

    /**
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
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'containAllDownStream' => 'ContainAllDownStream',
        'downStreamNodeIdList' => 'DownStreamNodeIdList',
        'endBizDate' => 'EndBizDate',
        'filterList' => 'FilterList',
        'globalParamList' => 'GlobalParamList',
        'maxDueTime' => 'MaxDueTime',
        'minDueTime' => 'MinDueTime',
        'name' => 'Name',
        'nodeIdList' => 'NodeIdList',
        'nodeParamsList' => 'NodeParamsList',
        'parallelism' => 'Parallelism',
        'projectId' => 'ProjectId',
        'startBizDate' => 'StartBizDate',
    ];

    public function validate()
    {
        if (\is_array($this->downStreamNodeIdList)) {
            Model::validateArray($this->downStreamNodeIdList);
        }
        if (\is_array($this->filterList)) {
            Model::validateArray($this->filterList);
        }
        if (\is_array($this->globalParamList)) {
            Model::validateArray($this->globalParamList);
        }
        if (\is_array($this->nodeIdList)) {
            Model::validateArray($this->nodeIdList);
        }
        if (\is_array($this->nodeParamsList)) {
            Model::validateArray($this->nodeParamsList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containAllDownStream) {
            $res['ContainAllDownStream'] = $this->containAllDownStream;
        }

        if (null !== $this->downStreamNodeIdList) {
            if (\is_array($this->downStreamNodeIdList)) {
                $res['DownStreamNodeIdList'] = [];
                $n1 = 0;
                foreach ($this->downStreamNodeIdList as $item1) {
                    $res['DownStreamNodeIdList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
        }

        if (null !== $this->filterList) {
            if (\is_array($this->filterList)) {
                $res['FilterList'] = [];
                $n1 = 0;
                foreach ($this->filterList as $item1) {
                    $res['FilterList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->globalParamList) {
            if (\is_array($this->globalParamList)) {
                $res['GlobalParamList'] = [];
                $n1 = 0;
                foreach ($this->globalParamList as $item1) {
                    $res['GlobalParamList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->nodeIdList)) {
                $res['NodeIdList'] = [];
                $n1 = 0;
                foreach ($this->nodeIdList as $item1) {
                    $res['NodeIdList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->nodeParamsList) {
            if (\is_array($this->nodeParamsList)) {
                $res['NodeParamsList'] = [];
                $n1 = 0;
                foreach ($this->nodeParamsList as $item1) {
                    $res['NodeParamsList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContainAllDownStream'])) {
            $model->containAllDownStream = $map['ContainAllDownStream'];
        }

        if (isset($map['DownStreamNodeIdList'])) {
            if (!empty($map['DownStreamNodeIdList'])) {
                $model->downStreamNodeIdList = [];
                $n1 = 0;
                foreach ($map['DownStreamNodeIdList'] as $item1) {
                    $model->downStreamNodeIdList[$n1++] = downStreamNodeIdList::fromMap($item1);
                }
            }
        }

        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
        }

        if (isset($map['FilterList'])) {
            if (!empty($map['FilterList'])) {
                $model->filterList = [];
                $n1 = 0;
                foreach ($map['FilterList'] as $item1) {
                    $model->filterList[$n1++] = filterList::fromMap($item1);
                }
            }
        }

        if (isset($map['GlobalParamList'])) {
            if (!empty($map['GlobalParamList'])) {
                $model->globalParamList = [];
                $n1 = 0;
                foreach ($map['GlobalParamList'] as $item1) {
                    $model->globalParamList[$n1++] = globalParamList::fromMap($item1);
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
                $n1 = 0;
                foreach ($map['NodeIdList'] as $item1) {
                    $model->nodeIdList[$n1++] = nodeIdList::fromMap($item1);
                }
            }
        }

        if (isset($map['NodeParamsList'])) {
            if (!empty($map['NodeParamsList'])) {
                $model->nodeParamsList = [];
                $n1 = 0;
                foreach ($map['NodeParamsList'] as $item1) {
                    $model->nodeParamsList[$n1++] = nodeParamsList::fromMap($item1);
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
