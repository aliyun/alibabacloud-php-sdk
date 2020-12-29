<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeRecordStatisticsSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class statistics extends Model
{
    /**
     * @var string
     */
    public $subDomain;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'subDomain' => 'SubDomain',
        'count'     => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->subDomain) {
            $res['SubDomain'] = $this->subDomain;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statistics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SubDomain'])) {
            $model->subDomain = $map['SubDomain'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
