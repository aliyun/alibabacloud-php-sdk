<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults;

use AlibabaCloud\Tea\Model;

class resourcesSummary extends Model
{
    /**
     * @description The number of non-compliant resources.
     *
     * @example 2
     *
     * @var int
     */
    public $nonCompliant;
    protected $_name = [
        'nonCompliant' => 'NonCompliant',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nonCompliant) {
            $res['NonCompliant'] = $this->nonCompliant;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourcesSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NonCompliant'])) {
            $model->nonCompliant = $map['NonCompliant'];
        }

        return $model;
    }
}
