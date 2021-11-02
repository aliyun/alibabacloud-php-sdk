<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeRiskCheckSummaryResponseBody\riskCheckSummary;

use AlibabaCloud\Tea\Model;

class riskLevelCount extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $key;
    protected $_name = [
        'count' => 'Count',
        'key'   => 'Key',
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
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskLevelCount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        return $model;
    }
}
