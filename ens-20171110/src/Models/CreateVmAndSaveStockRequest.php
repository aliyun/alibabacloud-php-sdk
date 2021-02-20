<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateVmAndSaveStockRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $tenant;

    /**
     * @var string
     */
    public $workloadUuid;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var string
     */
    public $resourceAttribute;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'tenant'            => 'Tenant',
        'workloadUuid'      => 'WorkloadUuid',
        'groupUuid'         => 'GroupUuid',
        'resourceAttribute' => 'ResourceAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
        }
        if (null !== $this->workloadUuid) {
            $res['WorkloadUuid'] = $this->workloadUuid;
        }
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVmAndSaveStockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }
        if (isset($map['WorkloadUuid'])) {
            $model->workloadUuid = $map['WorkloadUuid'];
        }
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }

        return $model;
    }
}
