<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\volume;

use AlibabaCloud\Tea\Model;

class flexVolume extends Model
{
    /**
     * @var string
     */
    public $fsType;

    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $driver;
    protected $_name = [
        'fsType'  => 'FsType',
        'options' => 'Options',
        'driver'  => 'Driver',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fsType) {
            $res['FsType'] = $this->fsType;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->driver) {
            $res['Driver'] = $this->driver;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flexVolume
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FsType'])) {
            $model->fsType = $map['FsType'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['Driver'])) {
            $model->driver = $map['Driver'];
        }

        return $model;
    }
}
