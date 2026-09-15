<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sandbox\V20260820\Models\InnerSandboxVolumeMount\named;

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
    public $volumeName;
    protected $_name = [
        'mountDir' => 'mountDir',
        'volumeName' => 'volumeName',
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

        if (null !== $this->volumeName) {
            $res['volumeName'] = $this->volumeName;
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

        if (isset($map['volumeName'])) {
            $model->volumeName = $map['volumeName'];
        }

        return $model;
    }
}
