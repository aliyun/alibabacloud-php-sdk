<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ram\V20150501\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ram\V20150501\Models\ListPoliciesForUserResponseBody\policies;

class ListPoliciesForUserResponseBody extends Model
{
    /**
     * @var policies
     */
    public $policies;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'policies' => 'Policies',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->policies) {
            $this->policies->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->policies) {
            $res['Policies'] = null !== $this->policies ? $this->policies->toArray($noStream) : $this->policies;
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
        if (isset($map['Policies'])) {
            $model->policies = policies::fromMap($map['Policies']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
