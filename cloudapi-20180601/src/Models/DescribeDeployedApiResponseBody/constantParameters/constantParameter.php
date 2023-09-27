<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeDeployedApiResponseBody\constantParameters;

use AlibabaCloud\Tea\Model;

class constantParameter extends Model
{
    /**
     * @var string
     */
    public $constantValue;

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
    public $serviceParameterName;
    protected $_name = [
        'constantValue'        => 'ConstantValue',
        'description'          => 'Description',
        'location'             => 'Location',
        'serviceParameterName' => 'ServiceParameterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->constantValue) {
            $res['ConstantValue'] = $this->constantValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
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
     * @return constantParameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConstantValue'])) {
            $model->constantValue = $map['ConstantValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
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
