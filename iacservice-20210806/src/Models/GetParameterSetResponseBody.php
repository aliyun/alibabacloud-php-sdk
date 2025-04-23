<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody\parameterSet;

class GetParameterSetResponseBody extends Model
{
    /**
     * @var parameterSet
     */
    public $parameterSet;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterSet' => 'parameterSet',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        if (null !== $this->parameterSet) {
            $this->parameterSet->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterSet) {
            $res['parameterSet'] = null !== $this->parameterSet ? $this->parameterSet->toArray($noStream) : $this->parameterSet;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['parameterSet'])) {
            $model->parameterSet = parameterSet::fromMap($map['parameterSet']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
