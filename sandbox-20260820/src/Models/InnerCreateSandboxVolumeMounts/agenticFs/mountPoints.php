<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerCreateSandboxVolumeMounts\agenticFs;

use AlibabaCloud\Dara\Model;

class mountPoints extends Model
{
    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $serverAddr;
    protected $_name = [
        'mountDir' => 'mountDir',
        'serverAddr' => 'serverAddr',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }

        if (null !== $this->serverAddr) {
            $res['serverAddr'] = $this->serverAddr;
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
        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }

        if (isset($map['serverAddr'])) {
            $model->serverAddr = $map['serverAddr'];
        }

        return $model;
    }
}
