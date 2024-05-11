<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIABTest\V20240119\Models;

use AlibabaCloud\Tea\Model;

class CheckLayerRequest extends Model
{
    /**
     * @var string
     */
    public $paramNames;
    protected $_name = [
        'paramNames' => 'ParamNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramNames) {
            $res['ParamNames'] = $this->paramNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckLayerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamNames'])) {
            $model->paramNames = $map['ParamNames'];
        }

        return $model;
    }
}
