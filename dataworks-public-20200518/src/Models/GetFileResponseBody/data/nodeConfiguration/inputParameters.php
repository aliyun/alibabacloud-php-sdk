<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetFileResponseBody\data\nodeConfiguration;

use AlibabaCloud\Tea\Model;

class inputParameters extends Model
{
    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $valueSource;
    protected $_name = [
        'parameterName' => 'ParameterName',
        'valueSource'   => 'ValueSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->valueSource) {
            $res['ValueSource'] = $this->valueSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['ValueSource'])) {
            $model->valueSource = $map['ValueSource'];
        }

        return $model;
    }
}
