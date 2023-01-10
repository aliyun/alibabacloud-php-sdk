<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eais\V20190624\Models\CreateEaiEciRequest\eci;

use AlibabaCloud\Tea\Model;

class container extends Model
{
    /**
     * @example 100
     *
     * @var string
     */
    public $arg;

    /**
     * @example sleep
     *
     * @var string
     */
    public $command;

    /**
     * @example nginx
     *
     * @var string
     */
    public $image;

    /**
     * @example test1
     *
     * @var string
     */
    public $name;

    /**
     * @example /mnt/eais=eais,/models=eais/models
     *
     * @var string
     */
    public $volumes;
    protected $_name = [
        'arg'     => 'Arg',
        'command' => 'Command',
        'image'   => 'Image',
        'name'    => 'Name',
        'volumes' => 'Volumes',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return container
     */
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
