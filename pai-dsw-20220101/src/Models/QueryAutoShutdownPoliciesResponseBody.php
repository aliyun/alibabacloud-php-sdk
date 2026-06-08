<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Paidsw\V20220101\Models\QueryAutoShutdownPoliciesResponseBody\autoShutdownPolicies;

class QueryAutoShutdownPoliciesResponseBody extends Model
{
    /**
     * @var autoShutdownPolicies[]
     */
    public $autoShutdownPolicies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'autoShutdownPolicies' => 'AutoShutdownPolicies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->autoShutdownPolicies)) {
            Model::validateArray($this->autoShutdownPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoShutdownPolicies) {
            if (\is_array($this->autoShutdownPolicies)) {
                $res['AutoShutdownPolicies'] = [];
                $n1 = 0;
                foreach ($this->autoShutdownPolicies as $item1) {
                    $res['AutoShutdownPolicies'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AutoShutdownPolicies'])) {
            if (!empty($map['AutoShutdownPolicies'])) {
                $model->autoShutdownPolicies = [];
                $n1 = 0;
                foreach ($map['AutoShutdownPolicies'] as $item1) {
                    $model->autoShutdownPolicies[$n1] = autoShutdownPolicies::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
