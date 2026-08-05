<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Dara\Model;

class AgentAuthorizationPrincipal extends Model
{
    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $principalType;
    protected $_name = [
        'principalId' => 'principalId',
        'principalType' => 'principalType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->principalId) {
            $res['principalId'] = $this->principalId;
        }

        if (null !== $this->principalType) {
            $res['principalType'] = $this->principalType;
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
        if (isset($map['principalId'])) {
            $model->principalId = $map['principalId'];
        }

        if (isset($map['principalType'])) {
            $model->principalType = $map['principalType'];
        }

        return $model;
    }
}
