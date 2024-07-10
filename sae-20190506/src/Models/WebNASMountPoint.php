<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebNASMountPoint extends Model
{
    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $nasAddr;

    /**
     * @var string
     */
    public $nasPath;
    protected $_name = [
        'mountDir' => 'MountDir',
        'nasAddr'  => 'NasAddr',
        'nasPath'  => 'NasPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountDir) {
            $res['MountDir'] = $this->mountDir;
        }
        if (null !== $this->nasAddr) {
            $res['NasAddr'] = $this->nasAddr;
        }
        if (null !== $this->nasPath) {
            $res['NasPath'] = $this->nasPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebNASMountPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountDir'])) {
            $model->mountDir = $map['MountDir'];
        }
        if (isset($map['NasAddr'])) {
            $model->nasAddr = $map['NasAddr'];
        }
        if (isset($map['NasPath'])) {
            $model->nasPath = $map['NasPath'];
        }

        return $model;
    }
}
