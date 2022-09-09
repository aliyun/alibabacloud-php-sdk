<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\SDK\IaCService\V20210806\Models\GetParameterSetResponseBody\parameterSet;
use AlibabaCloud\Tea\Model;

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
        'requestId'    => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterSet) {
            $res['parameterSet'] = null !== $this->parameterSet ? $this->parameterSet->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetParameterSetResponseBody
     */
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
