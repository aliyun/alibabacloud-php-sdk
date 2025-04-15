<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetAgentBasisStatusRequest extends Model
{
    /**
     * @var int[]
     */
    public $agentIds;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int[]
     */
    public $depIds;

    /**
     * @var int
     */
    public $endDate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $startDate;
    protected $_name = [
        'agentIds' => 'AgentIds',
        'currentPage' => 'CurrentPage',
        'depIds' => 'DepIds',
        'endDate' => 'EndDate',
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
        'startDate' => 'StartDate',
    ];

    public function validate()
    {
        if (\is_array($this->agentIds)) {
            Model::validateArray($this->agentIds);
        }
        if (\is_array($this->depIds)) {
            Model::validateArray($this->depIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentIds) {
            if (\is_array($this->agentIds)) {
                $res['AgentIds'] = [];
                $n1 = 0;
                foreach ($this->agentIds as $item1) {
                    $res['AgentIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->depIds) {
            if (\is_array($this->depIds)) {
                $res['DepIds'] = [];
                $n1 = 0;
                foreach ($this->depIds as $item1) {
                    $res['DepIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
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
        if (isset($map['AgentIds'])) {
            if (!empty($map['AgentIds'])) {
                $model->agentIds = [];
                $n1 = 0;
                foreach ($map['AgentIds'] as $item1) {
                    $model->agentIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DepIds'])) {
            if (!empty($map['DepIds'])) {
                $model->depIds = [];
                $n1 = 0;
                foreach ($map['DepIds'] as $item1) {
                    $model->depIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
