<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthIdentityResponseBody;

use AlibabaCloud\SDK\OnsMqtt\V20200420\Models\QueryCustomAuthIdentityResponseBody\data\results;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example AAAAAXA+GzVqTutYpgkFjBrchKzuvSbpuTqtt6OF9tsC9QnJ
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'nextToken' => 'NextToken',
        'results'   => 'Results',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n              = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
