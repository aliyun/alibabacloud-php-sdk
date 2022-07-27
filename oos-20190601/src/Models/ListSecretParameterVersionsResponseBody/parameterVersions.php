<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParameterVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class parameterVersions extends Model
{
    /**
     * @var int
     */
    public $parameterVersion;

    /**
     * @var string
     */
    public $updatedBy;

    /**
     * @var string
     */
    public $updatedDate;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'parameterVersion' => 'ParameterVersion',
        'updatedBy'        => 'UpdatedBy',
        'updatedDate'      => 'UpdatedDate',
        'value'            => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parameterVersion) {
            $res['ParameterVersion'] = $this->parameterVersion;
        }
        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameterVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParameterVersion'])) {
            $model->parameterVersion = $map['ParameterVersion'];
        }
        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
