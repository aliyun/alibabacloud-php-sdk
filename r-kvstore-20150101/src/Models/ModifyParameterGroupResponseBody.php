<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class ModifyParameterGroupResponseBody extends Model
{
    /**
     * @var string
     */
    public $paramGroupId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'paramGroupId' => 'ParamGroupId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paramGroupId) {
            $res['ParamGroupId'] = $this->paramGroupId;
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
        if (isset($map['ParamGroupId'])) {
            $model->paramGroupId = $map['ParamGroupId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
