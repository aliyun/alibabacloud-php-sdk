<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody\systemParameters;

use AlibabaCloud\Dara\Model;

class systemParameter extends Model
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
    public $location;
    /**
     * @var string
     */
    public $parameterName;
    /**
     * @var string
     */
    public $serviceParameterName;
    protected $_name = [
        'demoValue'            => 'DemoValue',
        'description'          => 'Description',
        'location'             => 'Location',
        'parameterName'        => 'ParameterName',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->demoValue) {
            $res['DemoValue'] = $this->demoValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }

        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
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
        if (isset($map['DemoValue'])) {
            $model->demoValue = $map['DemoValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }

        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        if (isset($map['ServiceParameterName'])) {
            $model->serviceParameterName = $map['ServiceParameterName'];
        }

        return $model;
    }
}
