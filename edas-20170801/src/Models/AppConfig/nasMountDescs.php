<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Dara\Model;

class nasMountDescs extends Model
{
    /**
     * @var string
     */
    public $mountPath;

    /**
     * @var string
     */
    public $nasPath;
    protected $_name = [
        'mountPath' => 'MountPath',
        'nasPath' => 'NasPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }

        if (null !== $this->nasPath) {
            $res['NasPath'] = $this->nasPath;
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
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }

        if (isset($map['NasPath'])) {
            $model->nasPath = $map['NasPath'];
        }

        return $model;
    }
}
