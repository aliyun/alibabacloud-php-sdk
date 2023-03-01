<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\NASConfig;

use AlibabaCloud\Tea\Model;

class mountPoints extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $enableTLS;

    /**
     * @example /home/test
     *
     * @var string
     */
    public $mountDir;

    /**
     * @example ***-uni85.cn-hangzhou.nas.aliyuncs.com:/
     *
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
     * @return mountPoints
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
