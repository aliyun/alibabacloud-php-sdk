<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListResourceRulesResponseBody\resourceRules;

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
        if (\is_array($this->resourceRules)) {
            Model::validateArray($this->resourceRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resourceRules) {
            if (\is_array($this->resourceRules)) {
                $res['ResourceRules'] = [];
                $n1                   = 0;
                foreach ($this->resourceRules as $item1) {
                    $res['ResourceRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['ResourceRules'])) {
            if (!empty($map['ResourceRules'])) {
                $model->resourceRules = [];
                $n1                   = 0;
                foreach ($map['ResourceRules'] as $item1) {
                    $model->resourceRules[$n1++] = resourceRules::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
