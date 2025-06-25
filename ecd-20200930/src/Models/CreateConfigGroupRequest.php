<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\CreateConfigGroupRequest\configTimers;

class CreateConfigGroupRequest extends Model
{
    /**
     * @var configTimers[]
     */
    public $configTimers;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'configTimers' => 'ConfigTimers',
        'description' => 'Description',
        'name' => 'Name',
        'productType' => 'ProductType',
        'regionId' => 'RegionId',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->configTimers)) {
            Model::validateArray($this->configTimers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configTimers) {
            if (\is_array($this->configTimers)) {
                $res['ConfigTimers'] = [];
                $n1 = 0;
                foreach ($this->configTimers as $item1) {
                    $res['ConfigTimers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ConfigTimers'])) {
            if (!empty($map['ConfigTimers'])) {
                $model->configTimers = [];
                $n1 = 0;
                foreach ($map['ConfigTimers'] as $item1) {
                    $model->configTimers[$n1] = configTimers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
