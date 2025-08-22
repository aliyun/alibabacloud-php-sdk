<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeEnvironmentFeatureResponseBody\data\featureStatus;

use AlibabaCloud\Dara\Model;

class featureContainers extends Model
{
    /**
     * @var string[]
     */
    public $args;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'args' => 'Args',
        'image' => 'Image',
        'name' => 'Name',
    ];

    public function validate()
    {
        if (\is_array($this->args)) {
            Model::validateArray($this->args);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->args) {
            if (\is_array($this->args)) {
                $res['Args'] = [];
                $n1 = 0;
                foreach ($this->args as $item1) {
                    $res['Args'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
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
        if (isset($map['Args'])) {
            if (!empty($map['Args'])) {
                $model->args = [];
                $n1 = 0;
                foreach ($map['Args'] as $item1) {
                    $model->args[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
