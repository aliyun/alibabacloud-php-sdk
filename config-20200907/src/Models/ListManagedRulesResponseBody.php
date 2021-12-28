<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules;
use AlibabaCloud\Tea\Model;

class ListManagedRulesResponseBody extends Model
{
    /**
     * @var managedRules[]
     */
    public $managedRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managedRules' => 'ManagedRules',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->managedRules) {
            $res['ManagedRules'] = [];
            if (null !== $this->managedRules && \is_array($this->managedRules)) {
                $n = 0;
                foreach ($this->managedRules as $item) {
                    $res['ManagedRules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListManagedRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ManagedRules'])) {
            if (!empty($map['ManagedRules'])) {
                $model->managedRules = [];
                $n                   = 0;
                foreach ($map['ManagedRules'] as $item) {
                    $model->managedRules[$n++] = null !== $item ? managedRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
