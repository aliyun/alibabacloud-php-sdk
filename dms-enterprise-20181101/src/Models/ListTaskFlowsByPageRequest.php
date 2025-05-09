<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class ListTaskFlowsByPageRequest extends Model
{
    /**
     * @var int[]
     */
    public $dagIdList;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $scenarioId;

    /**
     * @var string
     */
    public $searchKey;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'dagIdList' => 'DagIdList',
        'pageIndex' => 'PageIndex',
        'pageSize' => 'PageSize',
        'scenarioId' => 'ScenarioId',
        'searchKey' => 'SearchKey',
        'tid' => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->dagIdList)) {
            Model::validateArray($this->dagIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dagIdList) {
            if (\is_array($this->dagIdList)) {
                $res['DagIdList'] = [];
                $n1 = 0;
                foreach ($this->dagIdList as $item1) {
                    $res['DagIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->scenarioId) {
            $res['ScenarioId'] = $this->scenarioId;
        }

        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
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
        if (isset($map['DagIdList'])) {
            if (!empty($map['DagIdList'])) {
                $model->dagIdList = [];
                $n1 = 0;
                foreach ($map['DagIdList'] as $item1) {
                    $model->dagIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ScenarioId'])) {
            $model->scenarioId = $map['ScenarioId'];
        }

        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
