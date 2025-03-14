<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeClusterImageSecuritySummaryResponseBody\clusterImageEvent;

use AlibabaCloud\Tea\Model;

class imageCveVul extends Model
{
    /**
     * @description The number of vulnerabilities.
     *
     * @example 0
     *
     * @var int
     */
    public $count;

    /**
     * @description The alert level. Valid values:
     *
     *   **asap**: high. You must fix the vulnerability at the earliest opportunity.
     *   **nntf**: medium. You can fix the vulnerability based on your business requirements.
     *   **later**: low. You can ignore the vulnerability.
     *
     * @example later
     *
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'count' => 'Count',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageCveVul
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
