<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationResultsResponseBody\results\metricResults;

use AlibabaCloud\Dara\Model;

class accountSummary extends Model
{
    /**
     * @var int
     */
    public $nonCompliant;
    protected $_name = [
        'nonCompliant' => 'NonCompliant',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->nonCompliant) {
            $res['NonCompliant'] = $this->nonCompliant;
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
        if (isset($map['NonCompliant'])) {
            $model->nonCompliant = $map['NonCompliant'];
        }

        return $model;
    }
}
