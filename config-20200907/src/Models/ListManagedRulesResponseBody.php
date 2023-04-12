<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\ListManagedRulesResponseBody\managedRules;
use AlibabaCloud\Tea\Model;

class ListManagedRulesResponseBody extends Model
{
    /**
     * @description The managed rules.
     *
     * @var managedRules
     */
    public $managedRules;

    /**
     * @description The ID of the request.
     *
     * @example B3E605AB-63D5-1EE0-BFA6-0BAC247B0461
     *
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
            $res['ManagedRules'] = null !== $this->managedRules ? $this->managedRules->toMap() : null;
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
            $model->managedRules = managedRules::fromMap($map['ManagedRules']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
