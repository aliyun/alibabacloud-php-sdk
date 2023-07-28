<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListSecretParameterVersionsResponseBody;

use AlibabaCloud\Tea\Model;

class parameterVersions extends Model
{
    /**
     * @description The version number of the encryption parameter.
     *
     * @example 1
     *
     * @var int
     */
    public $parameterVersion;

    /**
     * @description The user who updated the encryption parameter.
     *
     * @example root(130900000)
     *
     * @var string
     */
    public $updatedBy;

    /**
     * @description The time when the encryption parameter was updated.
     *
     * @example 2020-09-01T08:01:43Z
     *
     * @var string
     */
    public $updatedDate;

    /**
     * @description The value of the encryption parameter.
     *
     * @example SecretParameter
     *
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
