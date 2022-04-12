<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class nasMountDescs extends Model
{
    /**
     * @description NAS挂载路径
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description NAS文件路径
     *
     * @var string
     */
    public $nasPath;
    protected $_name = [
        'mountPath' => 'MountPath',
        'nasPath'   => 'NasPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->nasPath) {
            $res['NasPath'] = $this->nasPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nasMountDescs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['NasPath'])) {
            $model->nasPath = $map['NasPath'];
        }

        return $model;
    }
}
