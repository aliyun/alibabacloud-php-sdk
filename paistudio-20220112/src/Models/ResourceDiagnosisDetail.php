<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

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
        'limit'           => 'Limit',
        'status'          => 'Status',
        'used'            => 'Used',
        'workloadIds'     => 'WorkloadIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exceedResources) {
            $res['ExceedResources'] = $this->exceedResources;
        }
        if (null !== $this->limit) {
            $res['Limit'] = null !== $this->limit ? $this->limit->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->used) {
            $res['Used'] = null !== $this->used ? $this->used->toMap() : null;
        }
        if (null !== $this->workloadIds) {
            $res['WorkloadIds'] = $this->workloadIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResourceDiagnosisDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExceedResources'])) {
            if (!empty($map['ExceedResources'])) {
                $model->exceedResources = $map['ExceedResources'];
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
                $model->workloadIds = $map['WorkloadIds'];
            }
        }

        return $model;
    }
}
