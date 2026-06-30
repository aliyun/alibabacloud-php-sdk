<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models\DescribeCommonSandboxTemplatesResponseBody;

use AlibabaCloud\Dara\Model;

class templates extends Model
{
    /**
     * @var string
     */
    public $defaultCpu;

    /**
     * @var string
     */
    public $defaultMemory;

    /**
     * @var int
     */
    public $defaultReplicas;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'defaultCpu' => 'DefaultCpu',
        'defaultMemory' => 'DefaultMemory',
        'defaultReplicas' => 'DefaultReplicas',
        'description' => 'Description',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultCpu) {
            $res['DefaultCpu'] = $this->defaultCpu;
        }

        if (null !== $this->defaultMemory) {
            $res['DefaultMemory'] = $this->defaultMemory;
        }

        if (null !== $this->defaultReplicas) {
            $res['DefaultReplicas'] = $this->defaultReplicas;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['DefaultCpu'])) {
            $model->defaultCpu = $map['DefaultCpu'];
        }

        if (isset($map['DefaultMemory'])) {
            $model->defaultMemory = $map['DefaultMemory'];
        }

        if (isset($map['DefaultReplicas'])) {
            $model->defaultReplicas = $map['DefaultReplicas'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
