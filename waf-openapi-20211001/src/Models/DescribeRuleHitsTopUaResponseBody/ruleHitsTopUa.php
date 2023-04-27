<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUaResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopUa extends Model
{
    /**
     * @description The number of attacks that are initiated from the IP address.
     *
     * @example 531
     *
     * @var int
     */
    public $count;

    /**
     * @description The user agent.
     *
     * @example android
     *
     * @var string
     */
    public $ua;
    protected $_name = [
        'count' => 'Count',
        'ua'    => 'Ua',
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
        if (null !== $this->ua) {
            $res['Ua'] = $this->ua;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitsTopUa
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Ua'])) {
            $model->ua = $map['Ua'];
        }

        return $model;
    }
}
