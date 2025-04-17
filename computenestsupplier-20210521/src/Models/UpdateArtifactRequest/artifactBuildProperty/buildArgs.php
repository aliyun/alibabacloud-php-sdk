<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateArtifactRequest\artifactBuildProperty;

use AlibabaCloud\Dara\Model;

class buildArgs extends Model
{
    /**
     * @var string
     */
    public $argumentName;

    /**
     * @var string
     */
    public $argumentValue;
    protected $_name = [
        'argumentName' => 'ArgumentName',
        'argumentValue' => 'ArgumentValue',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
