<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class DynamicMountPoint extends Model
{
    /**
     * @var string
     */
    public $options;

    /**
     * @var string
     */
    public $rootPath;
    protected $_name = [
        'options' => 'Options',
        'rootPath' => 'RootPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        if (null !== $this->rootPath) {
            $res['RootPath'] = $this->rootPath;
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
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        if (isset($map['RootPath'])) {
            $model->rootPath = $map['RootPath'];
        }

        return $model;
    }
}
