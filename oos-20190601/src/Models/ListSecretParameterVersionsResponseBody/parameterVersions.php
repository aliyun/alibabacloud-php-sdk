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
    public $value;

    /**
     * @var string
     */
    public $updatedDate;

    /**
     * @var string
     */
    public $updatedBy;
    protected $_name = [
        'parameterVersion' => 'ParameterVersion',
        'value'            => 'Value',
        'updatedDate'      => 'UpdatedDate',
        'updatedBy'        => 'UpdatedBy',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->updatedDate) {
            $res['UpdatedDate'] = $this->updatedDate;
        }
        if (null !== $this->updatedBy) {
            $res['UpdatedBy'] = $this->updatedBy;
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
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['UpdatedDate'])) {
            $model->updatedDate = $map['UpdatedDate'];
        }
        if (isset($map['UpdatedBy'])) {
            $model->updatedBy = $map['UpdatedBy'];
        }

        return $model;
    }
}
