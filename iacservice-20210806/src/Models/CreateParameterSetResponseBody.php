<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models;

use AlibabaCloud\Dara\Model;

class CreateParameterSetResponseBody extends Model
{
    /**
     * @var string
     */
    public $parameterSetId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'parameterSetId' => 'parameterSetId',
        'requestId' => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->parameterSetId) {
            $res['parameterSetId'] = $this->parameterSetId;
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
        if (isset($map['parameterSetId'])) {
            $model->parameterSetId = $map['parameterSetId'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
