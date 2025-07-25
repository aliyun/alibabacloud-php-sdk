<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Tea\Model;

class CacheInfo extends Model
{
    /**
     * @var string
     */
    public $mountPoint;

    /**
     * @var string
     */
    public $port;
    protected $_name = [
        'mountPoint' => 'MountPoint',
        'port' => 'Port',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPoint) {
            $res['MountPoint'] = $this->mountPoint;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CacheInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPoint'])) {
            $model->mountPoint = $map['MountPoint'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
