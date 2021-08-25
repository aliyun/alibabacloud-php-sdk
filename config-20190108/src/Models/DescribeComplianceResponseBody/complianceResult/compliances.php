<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeComplianceResponseBody\complianceResult;

use AlibabaCloud\Tea\Model;

class compliances extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $complianceType;
    protected $_name = [
        'count'          => 'Count',
        'complianceType' => 'ComplianceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->complianceType) {
            $res['ComplianceType'] = $this->complianceType;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['ComplianceType'])) {
            $model->complianceType = $map['ComplianceType'];
        }

        return $model;
    }
}
