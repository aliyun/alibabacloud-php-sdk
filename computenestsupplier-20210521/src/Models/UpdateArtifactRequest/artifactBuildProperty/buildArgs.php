<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactBuildProperty;

use AlibabaCloud\Tea\Model;

class buildArgs extends Model
{
    /**
     * @description The name of a specific build argument.
     *
     * @example ENV
     *
     * @var string
     */
    public $argumentName;

    /**
     * @description The value of a specific build argument.
     *
     * @example nginx:latest
     *
     * @var string
     */
    public $argumentValue;
    protected $_name = [
        'argumentName'  => 'ArgumentName',
        'argumentValue' => 'ArgumentValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->argumentName) {
            $res['ArgumentName'] = $this->argumentName;
        }
        if (null !== $this->argumentValue) {
            $res['ArgumentValue'] = $this->argumentValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildArgs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArgumentName'])) {
            $model->argumentName = $map['ArgumentName'];
        }
        if (isset($map['ArgumentValue'])) {
            $model->argumentValue = $map['ArgumentValue'];
        }

        return $model;
    }
}
