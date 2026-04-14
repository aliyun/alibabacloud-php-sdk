<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class PolarFsMountConfig extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var bool
     */
    public $readOnly;

    /**
     * @var string
     */
    public $remoteDir;
    protected $_name = [
        'instanceId' => 'instanceId',
        'mountDir' => 'mountDir',
        'readOnly' => 'readOnly',
        'remoteDir' => 'remoteDir',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }

        if (null !== $this->readOnly) {
            $res['readOnly'] = $this->readOnly;
        }

        if (null !== $this->remoteDir) {
            $res['remoteDir'] = $this->remoteDir;
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
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }

        if (isset($map['readOnly'])) {
            $model->readOnly = $map['readOnly'];
        }

        if (isset($map['remoteDir'])) {
            $model->remoteDir = $map['remoteDir'];
        }

        return $model;
    }
}
