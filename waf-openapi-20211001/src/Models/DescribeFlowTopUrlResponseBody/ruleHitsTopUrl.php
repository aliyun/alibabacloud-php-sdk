<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopUrlResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopUrl extends Model
{
    /**
     * @description The total number of requests that are initiated by using the URL.
     *
     * @example 181174784
     *
     * @var int
     */
    public $count;

    /**
     * @description The URL that is used to initiate requests.
     *
     * @example www.aliyundoc.com/path1
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
