<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\ModifyEciScalingConfigurationRequest\volumes;

use AlibabaCloud\Dara\Model;

class NFSVolume extends Model
{
    /**
     * @var string
     */
    public $path;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $server;
    protected $_name = [
        'path' => 'Path',
        'readOnly' => 'ReadOnly',
        'server' => 'Server',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }

        if (null !== $this->readOnly) {
            $res['ReadOnly'] = $this->readOnly;
        }

        if (null !== $this->server) {
            $res['Server'] = $this->server;
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
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }

        if (isset($map['ReadOnly'])) {
            $model->readOnly = $map['ReadOnly'];
        }

        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }

        return $model;
    }
}
