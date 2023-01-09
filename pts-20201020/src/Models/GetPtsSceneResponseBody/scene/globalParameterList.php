<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetPtsSceneResponseBody\scene;

use AlibabaCloud\Tea\Model;

class globalParameterList extends Model
{
    /**
     * @example userName
     *
     * @var string
     */
    public $paramName;

    /**
     * @example lisi
     *
     * @var string
     */
    public $paramValue;
    protected $_name = [
        'paramName'  => 'ParamName',
        'paramValue' => 'ParamValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramName) {
            $res['ParamName'] = $this->paramName;
        }
        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return globalParameterList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamName'])) {
            $model->paramName = $map['ParamName'];
        }
        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }

        return $model;
    }
}
