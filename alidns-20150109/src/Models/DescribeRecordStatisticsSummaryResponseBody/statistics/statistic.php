<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsSummaryResponseBody\statistics;

use AlibabaCloud\Tea\Model;

class statistic extends Model
{
    /**
     * @description The number of queries.
     *
     * @example 838711553
     *
     * @var int
     */
    public $count;

    /**
     * @description The subdomain name.
     *
     * @example t1.alitest2.com
     *
     * @var string
     */
    public $subDomain;
    protected $_name = [
        'count'     => 'Count',
        'subDomain' => 'SubDomain',
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
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistic
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }

        return $model;
    }
}
