<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;

class ResourceDiagnosisDetail extends Model
{
    /**
     * @var string[]
     */
    public $exceedResources;

    /**
     * @var ResourceAmount
     */
    public $limit;

    /**
     * @var string
     */
    public $status;

    /**
     * @var ResourceAmount
     */
    public $used;

    /**
     * @var string[]
     */
    public $workloadIds;
    protected $_name = [
        'exceedResources' => 'ExceedResources',
        'limit' => 'Limit',
        'status' => 'Status',
        'used' => 'Used',
        'workloadIds' => 'WorkloadIds',
    ];

    public function validate()
    {
        if (\is_array($this->exceedResources)) {
            Model::validateArray($this->exceedResources);
        }
        if (null !== $this->limit) {
            $this->limit->validate();
        }
        if (null !== $this->used) {
            $this->used->validate();
        }
        if (\is_array($this->workloadIds)) {
            Model::validateArray($this->workloadIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceedResources) {
            if (\is_array($this->exceedResources)) {
                $res['ExceedResources'] = [];
                $n1 = 0;
                foreach ($this->exceedResources as $item1) {
                    $res['ExceedResources'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->limit) {
            $res['Limit'] = null !== $this->limit ? $this->limit->toArray($noStream) : $this->limit;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->used) {
            $res['Used'] = null !== $this->used ? $this->used->toArray($noStream) : $this->used;
        }

        if (null !== $this->workloadIds) {
            if (\is_array($this->workloadIds)) {
                $res['WorkloadIds'] = [];
                $n1 = 0;
                foreach ($this->workloadIds as $item1) {
                    $res['WorkloadIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ExceedResources'])) {
            if (!empty($map['ExceedResources'])) {
                $model->exceedResources = [];
                $n1 = 0;
                foreach ($map['ExceedResources'] as $item1) {
                    $model->exceedResources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Limit'])) {
            $model->limit = ResourceAmount::fromMap($map['Limit']);
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Used'])) {
            $model->used = ResourceAmount::fromMap($map['Used']);
        }

        if (isset($map['WorkloadIds'])) {
            if (!empty($map['WorkloadIds'])) {
                $model->workloadIds = [];
                $n1 = 0;
                foreach ($map['WorkloadIds'] as $item1) {
                    $model->workloadIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
