<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\serviceParameters;

use AlibabaCloud\Dara\Model;

class serviceParameter extends Model
{
    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $parameterType;

    /**
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'location' => 'Location',
        'parameterType' => 'ParameterType',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->parameterType) {
            $res['ParameterType'] = $this->parameterType;
        }

        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
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
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['ParameterType'])) {
            $model->parameterType = $map['ParameterType'];
        }

        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
