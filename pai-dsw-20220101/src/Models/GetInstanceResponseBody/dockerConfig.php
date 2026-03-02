<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class dockerConfig extends Model
{
    /**
     * @var int
     */
    public $containersLimit;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $mountAccessConfigPath;
    protected $_name = [
        'containersLimit' => 'ContainersLimit',
        'enable' => 'Enable',
        'mountAccessConfigPath' => 'MountAccessConfigPath',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->containersLimit) {
            $res['ContainersLimit'] = $this->containersLimit;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->mountAccessConfigPath) {
            $res['MountAccessConfigPath'] = $this->mountAccessConfigPath;
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
        if (isset($map['ContainersLimit'])) {
            $model->containersLimit = $map['ContainersLimit'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['MountAccessConfigPath'])) {
            $model->mountAccessConfigPath = $map['MountAccessConfigPath'];
        }

        return $model;
    }
}
