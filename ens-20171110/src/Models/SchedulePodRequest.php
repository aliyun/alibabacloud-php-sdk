<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class SchedulePodRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $areaCodes;

    /**
     * @var string
     */
    public $groupUuid;

    /**
     * @var string
     */
    public $isps;

    /**
     * @var string
     */
    public $labels;

    /**
     * @var string
     */
    public $regions;

    /**
     * @var string
     */
    public $requirements;

    /**
     * @var string
     */
    public $resourceAttribute;

    /**
     * @var string
     */
    public $tenant;

    /**
     * @var string
     */
    public $workloadUuid;
    protected $_name = [
        'aliUid'            => 'AliUid',
        'areaCodes'         => 'AreaCodes',
        'groupUuid'         => 'GroupUuid',
        'isps'              => 'Isps',
        'labels'            => 'Labels',
        'regions'           => 'Regions',
        'requirements'      => 'Requirements',
        'resourceAttribute' => 'ResourceAttribute',
        'tenant'            => 'Tenant',
        'workloadUuid'      => 'WorkloadUuid',
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
        if (null !== $this->areaCodes) {
            $res['AreaCodes'] = $this->areaCodes;
        }
        if (null !== $this->groupUuid) {
            $res['GroupUuid'] = $this->groupUuid;
        }
        if (null !== $this->isps) {
            $res['Isps'] = $this->isps;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->regions) {
            $res['Regions'] = $this->regions;
        }
        if (null !== $this->requirements) {
            $res['Requirements'] = $this->requirements;
        }
        if (null !== $this->resourceAttribute) {
            $res['ResourceAttribute'] = $this->resourceAttribute;
        }
        if (null !== $this->tenant) {
            $res['Tenant'] = $this->tenant;
        }
        if (null !== $this->workloadUuid) {
            $res['WorkloadUuid'] = $this->workloadUuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SchedulePodRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['AreaCodes'])) {
            $model->areaCodes = $map['AreaCodes'];
        }
        if (isset($map['GroupUuid'])) {
            $model->groupUuid = $map['GroupUuid'];
        }
        if (isset($map['Isps'])) {
            $model->isps = $map['Isps'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Regions'])) {
            $model->regions = $map['Regions'];
        }
        if (isset($map['Requirements'])) {
            $model->requirements = $map['Requirements'];
        }
        if (isset($map['ResourceAttribute'])) {
            $model->resourceAttribute = $map['ResourceAttribute'];
        }
        if (isset($map['Tenant'])) {
            $model->tenant = $map['Tenant'];
        }
        if (isset($map['WorkloadUuid'])) {
            $model->workloadUuid = $map['WorkloadUuid'];
        }

        return $model;
    }
}
