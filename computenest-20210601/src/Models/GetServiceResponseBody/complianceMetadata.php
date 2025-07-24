<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceResponseBody;

use AlibabaCloud\Tea\Model;

class complianceMetadata extends Model
{
    /**
     * @description The compliance pack list.
     *
     * @var string[]
     */
    public $compliancePacks;
    protected $_name = [
        'compliancePacks' => 'CompliancePacks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePacks) {
            $res['CompliancePacks'] = $this->compliancePacks;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return complianceMetadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePacks'])) {
            if (!empty($map['CompliancePacks'])) {
                $model->compliancePacks = $map['CompliancePacks'];
            }
        }

        return $model;
    }
}
