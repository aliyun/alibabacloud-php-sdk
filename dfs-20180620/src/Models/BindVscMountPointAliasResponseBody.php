<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DFS\V20180620\Models;

use AlibabaCloud\Tea\Model;

class BindVscMountPointAliasResponseBody extends Model
{
    /**
     * @example sdfe
     *
     * @var string
     */
    public $mountPointAlias;

    /**
     * @example 55C5FFD6-BF99-41BD-9C66-FFF39189****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'mountPointAlias' => 'MountPointAlias',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPointAlias) {
            $res['MountPointAlias'] = $this->mountPointAlias;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindVscMountPointAliasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPointAlias'])) {
            $model->mountPointAlias = $map['MountPointAlias'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
