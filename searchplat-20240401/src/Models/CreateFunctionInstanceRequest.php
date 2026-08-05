<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Searchplat\V20240401\Models\CreateFunctionInstanceRequest\createParameters;

class CreateFunctionInstanceRequest extends Model
{
    /**
     * @var createParameters[]
     */
    public $createParameters;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $functionType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $modelType;
    protected $_name = [
        'createParameters' => 'createParameters',
        'description' => 'description',
        'functionType' => 'functionType',
        'instanceName' => 'instanceName',
        'modelType' => 'modelType',
    ];

    public function validate()
    {
        if (\is_array($this->createParameters)) {
            Model::validateArray($this->createParameters);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createParameters) {
            if (\is_array($this->createParameters)) {
                $res['createParameters'] = [];
                $n1 = 0;
                foreach ($this->createParameters as $item1) {
                    $res['createParameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->functionType) {
            $res['functionType'] = $this->functionType;
        }

        if (null !== $this->instanceName) {
            $res['instanceName'] = $this->instanceName;
        }

        if (null !== $this->modelType) {
            $res['modelType'] = $this->modelType;
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
        if (isset($map['createParameters'])) {
            if (!empty($map['createParameters'])) {
                $model->createParameters = [];
                $n1 = 0;
                foreach ($map['createParameters'] as $item1) {
                    $model->createParameters[$n1] = createParameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['functionType'])) {
            $model->functionType = $map['functionType'];
        }

        if (isset($map['instanceName'])) {
            $model->instanceName = $map['instanceName'];
        }

        if (isset($map['modelType'])) {
            $model->modelType = $map['modelType'];
        }

        return $model;
    }
}
