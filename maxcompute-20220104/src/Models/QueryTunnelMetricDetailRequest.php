<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class QueryTunnelMetricDetailRequest extends Model
{
    /**
     * @var bool
     */
    public $ascOrder;

    /**
     * @var string[]
     */
    public $groupList;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string[]
     */
    public $operationList;

    /**
     * @var string
     */
    public $orderColumn;

    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $quotaNickname;

    /**
     * @var string[]
     */
    public $tableList;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'ascOrder' => 'ascOrder',
        'groupList' => 'groupList',
        'limit' => 'limit',
        'operationList' => 'operationList',
        'orderColumn' => 'orderColumn',
        'project' => 'project',
        'quotaNickname' => 'quotaNickname',
        'tableList' => 'tableList',
        'endTime' => 'endTime',
        'startTime' => 'startTime',
    ];

    public function validate()
    {
        if (\is_array($this->groupList)) {
            Model::validateArray($this->groupList);
        }
        if (\is_array($this->operationList)) {
            Model::validateArray($this->operationList);
        }
        if (\is_array($this->tableList)) {
            Model::validateArray($this->tableList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ascOrder) {
            $res['ascOrder'] = $this->ascOrder;
        }

        if (null !== $this->groupList) {
            if (\is_array($this->groupList)) {
                $res['groupList'] = [];
                $n1 = 0;
                foreach ($this->groupList as $item1) {
                    $res['groupList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->operationList) {
            if (\is_array($this->operationList)) {
                $res['operationList'] = [];
                $n1 = 0;
                foreach ($this->operationList as $item1) {
                    $res['operationList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->orderColumn) {
            $res['orderColumn'] = $this->orderColumn;
        }

        if (null !== $this->project) {
            $res['project'] = $this->project;
        }

        if (null !== $this->quotaNickname) {
            $res['quotaNickname'] = $this->quotaNickname;
        }

        if (null !== $this->tableList) {
            if (\is_array($this->tableList)) {
                $res['tableList'] = [];
                $n1 = 0;
                foreach ($this->tableList as $item1) {
                    $res['tableList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
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
        if (isset($map['ascOrder'])) {
            $model->ascOrder = $map['ascOrder'];
        }

        if (isset($map['groupList'])) {
            if (!empty($map['groupList'])) {
                $model->groupList = [];
                $n1 = 0;
                foreach ($map['groupList'] as $item1) {
                    $model->groupList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['operationList'])) {
            if (!empty($map['operationList'])) {
                $model->operationList = [];
                $n1 = 0;
                foreach ($map['operationList'] as $item1) {
                    $model->operationList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['orderColumn'])) {
            $model->orderColumn = $map['orderColumn'];
        }

        if (isset($map['project'])) {
            $model->project = $map['project'];
        }

        if (isset($map['quotaNickname'])) {
            $model->quotaNickname = $map['quotaNickname'];
        }

        if (isset($map['tableList'])) {
            if (!empty($map['tableList'])) {
                $model->tableList = [];
                $n1 = 0;
                foreach ($map['tableList'] as $item1) {
                    $model->tableList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
