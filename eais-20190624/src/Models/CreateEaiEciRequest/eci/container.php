<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciRequest\eci;

use AlibabaCloud\Dara\Model;

class container extends Model
{
    /**
     * @var string
     */
    public $arg;

    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $volumes;
    protected $_name = [
        'arg' => 'Arg',
        'command' => 'Command',
        'image' => 'Image',
        'name' => 'Name',
        'volumes' => 'Volumes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->arg) {
            $res['Arg'] = $this->arg;
        }

        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }

        if (null !== $this->image) {
            $res['Image'] = $this->image;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->volumes) {
            $res['Volumes'] = $this->volumes;
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
        if (isset($map['Arg'])) {
            $model->arg = $map['Arg'];
        }

        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }

        if (isset($map['Image'])) {
            $model->image = $map['Image'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Volumes'])) {
            $model->volumes = $map['Volumes'];
        }

        return $model;
    }
}
