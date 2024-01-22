<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class NASMountConfig extends Model
{
    /**
     * @var bool
     */
    public $enableTLS;

    /**
     * @var string
     */
    public $mountDir;

    /**
     * @var string
     */
    public $serverAddr;
    protected $_name = [
        'enableTLS'  => 'enableTLS',
        'mountDir'   => 'mountDir',
        'serverAddr' => 'serverAddr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableTLS) {
            $res['enableTLS'] = $this->enableTLS;
        }
        if (null !== $this->mountDir) {
            $res['mountDir'] = $this->mountDir;
        }
        if (null !== $this->serverAddr) {
            $res['serverAddr'] = $this->serverAddr;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return NASMountConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['enableTLS'])) {
            $model->enableTLS = $map['enableTLS'];
        }
        if (isset($map['mountDir'])) {
            $model->mountDir = $map['mountDir'];
        }
        if (isset($map['serverAddr'])) {
            $model->serverAddr = $map['serverAddr'];
        }

        return $model;
    }
}
