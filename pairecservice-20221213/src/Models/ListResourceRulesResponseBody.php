<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListResourceRulesResponseBody\resourceRules;
use AlibabaCloud\Tea\Model;

class ListResourceRulesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resourceRules[]
     */
    public $resourceRules;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'requestId'     => 'RequestId',
        'resourceRules' => 'ResourceRules',
        'totalCount'    => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceRules) {
            $res['ResourceRules'] = [];
            if (null !== $this->resourceRules && \is_array($this->resourceRules)) {
                $n = 0;
                foreach ($this->resourceRules as $item) {
                    $res['ResourceRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListResourceRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceRules'])) {
            if (!empty($map['ResourceRules'])) {
                $model->resourceRules = [];
                $n                    = 0;
                foreach ($map['ResourceRules'] as $item) {
                    $model->resourceRules[$n++] = null !== $item ? resourceRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
