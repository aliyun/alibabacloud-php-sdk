<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeDeployedApiResponseBody\customSystemParameters;

use AlibabaCloud\Tea\Model;

class customSystemParameter extends Model
{
    /**
     * @var string
     */
    public $demoValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $parameterName;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'demoValue'            => 'DemoValue',
        'description'          => 'Description',
        'parameterName'        => 'ParameterName',
        'location'             => 'Location',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->serviceParameterName) {
            $res['ServiceParameterName'] = $this->serviceParameterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customSystemParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
