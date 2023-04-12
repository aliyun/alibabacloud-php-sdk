<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class GetCompliancePackRequest extends Model
{
    /**
     * @description The ID of the compliance package.
     *
     * For more information about how to obtain the ID of a compliance package, see [ListCompliancePacks](~~263332~~).
     * @example cp-a8a8626622af0082****
     *
     * @var string
     */
    public $compliancePackId;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCompliancePackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }

        return $model;
    }
}
