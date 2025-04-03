<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules;

class ListManagedRulesResponseBody extends Model
{
    /**
     * @var managedRules
     */
    public $managedRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'managedRules' => 'ManagedRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->managedRules) {
            $this->managedRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->managedRules) {
            $res['ManagedRules'] = null !== $this->managedRules ? $this->managedRules->toArray($noStream) : $this->managedRules;
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
        if (isset($map['ManagedRules'])) {
            $model->managedRules = managedRules::fromMap($map['ManagedRules']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
