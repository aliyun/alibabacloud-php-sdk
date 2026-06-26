<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class MicroSandboxConfig extends Model
{
    /**
     * @var string
     */
    public $osType;

    /**
     * @var string
     */
    public $readyCommand;

    /**
     * @var string
     */
    public $startCommand;
    protected $_name = [
        'osType' => 'osType',
        'readyCommand' => 'readyCommand',
        'startCommand' => 'startCommand',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->osType) {
            $res['osType'] = $this->osType;
        }

        if (null !== $this->readyCommand) {
            $res['readyCommand'] = $this->readyCommand;
        }

        if (null !== $this->startCommand) {
            $res['startCommand'] = $this->startCommand;
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
        if (isset($map['osType'])) {
            $model->osType = $map['osType'];
        }

        if (isset($map['readyCommand'])) {
            $model->readyCommand = $map['readyCommand'];
        }

        if (isset($map['startCommand'])) {
            $model->startCommand = $map['startCommand'];
        }

        return $model;
    }
}
