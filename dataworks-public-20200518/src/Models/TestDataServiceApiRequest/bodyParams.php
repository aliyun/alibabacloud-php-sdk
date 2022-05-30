<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\TestDataServiceApiRequest;

use AlibabaCloud\Tea\Model;

class bodyParams extends Model
{
    /**
     * @var string
     */
    public $paramKey;

    /**
     * @var string
     */
    public $paramValue;
    protected $_name = [
        'paramKey'   => 'ParamKey',
        'paramValue' => 'ParamValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramKey) {
            $res['ParamKey'] = $this->paramKey;
        }
        if (null !== $this->paramValue) {
            $res['ParamValue'] = $this->paramValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return bodyParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamKey'])) {
            $model->paramKey = $map['ParamKey'];
        }
        if (isset($map['ParamValue'])) {
            $model->paramValue = $map['ParamValue'];
        }

        return $model;
    }
}
