<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class GetAgentIndexRealTimeRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int[]
     */
    public $depIds;

    /**
     * @var int[]
     */
    public $groupIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'depIds' => 'DepIds',
        'groupIds' => 'GroupIds',
        'instanceId' => 'InstanceId',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->depIds)) {
            Model::validateArray($this->depIds);
        }
        if (\is_array($this->groupIds)) {
            Model::validateArray($this->groupIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->depIds) {
            if (\is_array($this->depIds)) {
                $res['DepIds'] = [];
                $n1 = 0;
                foreach ($this->depIds as $item1) {
                    $res['DepIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->groupIds) {
            if (\is_array($this->groupIds)) {
                $res['GroupIds'] = [];
                $n1 = 0;
                foreach ($this->groupIds as $item1) {
                    $res['GroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['DepIds'])) {
            if (!empty($map['DepIds'])) {
                $model->depIds = [];
                $n1 = 0;
                foreach ($map['DepIds'] as $item1) {
                    $model->depIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['GroupIds'])) {
            if (!empty($map['GroupIds'])) {
                $model->groupIds = [];
                $n1 = 0;
                foreach ($map['GroupIds'] as $item1) {
                    $model->groupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
