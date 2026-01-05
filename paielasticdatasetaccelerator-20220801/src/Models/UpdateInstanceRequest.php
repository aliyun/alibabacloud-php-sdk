<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIElasticDatasetAccelerator\V20220801\Models;

use AlibabaCloud\Dara\Model;

class UpdateInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $maxSlot;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'description' => 'Description',
        'maxSlot' => 'MaxSlot',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->maxSlot) {
            $res['MaxSlot'] = $this->maxSlot;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['MaxSlot'])) {
            $model->maxSlot = $map['MaxSlot'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
