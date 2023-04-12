<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetResourceComplianceGroupByRegionResponseBody\complianceResult\complianceResultList;

use AlibabaCloud\Tea\Model;

class compliances extends Model
{
    /**
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $complianceType;

    /**
     * @example 1
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'complianceType' => 'ComplianceType',
        'count'          => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return compliances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
