<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models\DescribeCommandsResponseBody\commands;

use AlibabaCloud\Tea\Model;

class parameterDefinitions extends Model
{
    /**
     * @example https://aliyun-client-assist.oss-accelerate.aliyuncs.com/linux/aliyun_assist_latest.rpm
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @example DownloadUrl
     *
     * @var string
     */
    public $parameterName;

    /**
     * @var string[]
     */
    public $possibleValues;

    /**
     * @example false
     *
     * @var bool
     */
    public $required;
    protected $_name = [
        'defaultValue'   => 'DefaultValue',
        'description'    => 'Description',
        'parameterName'  => 'ParameterName',
        'possibleValues' => 'PossibleValues',
        'required'       => 'Required',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
        }
        if (null !== $this->possibleValues) {
            $res['PossibleValues'] = $this->possibleValues;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterDefinitions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }
        if (isset($map['PossibleValues'])) {
            if (!empty($map['PossibleValues'])) {
                $model->possibleValues = $map['PossibleValues'];
            }
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        return $model;
    }
}
