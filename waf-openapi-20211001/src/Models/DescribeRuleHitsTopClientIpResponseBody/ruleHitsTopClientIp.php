<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopClientIpResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopClientIp extends Model
{
    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'clientIp' => 'ClientIp',
        'count'    => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitsTopClientIp
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
