<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeRuleHitsTopUrlResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopUrl extends Model
{
    /**
     * @description The number of requests that match protection rules.
     *
     * @example 21862
     *
     * @var int
     */
    public $count;

    /**
     * @description The request URL.
     *
     * >  The value is Base64-encoded.
     * @example d3d3LmFsaXl1bmRvYy5jb20vcGF0aDM=
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'count' => 'Count',
        'url'   => 'Url',
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
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitsTopUrl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
