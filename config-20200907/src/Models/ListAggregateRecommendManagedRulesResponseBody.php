<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateRecommendManagedRulesResponseBody\recommendedManagedRules;

class ListAggregateRecommendManagedRulesResponseBody extends Model
{
    /**
     * @var recommendedManagedRules
     */
    public $recommendedManagedRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'recommendedManagedRules' => 'RecommendedManagedRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->recommendedManagedRules) {
            $this->recommendedManagedRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recommendedManagedRules) {
            $res['RecommendedManagedRules'] = null !== $this->recommendedManagedRules ? $this->recommendedManagedRules->toArray($noStream) : $this->recommendedManagedRules;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RecommendedManagedRules'])) {
            $model->recommendedManagedRules = recommendedManagedRules::fromMap($map['RecommendedManagedRules']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
