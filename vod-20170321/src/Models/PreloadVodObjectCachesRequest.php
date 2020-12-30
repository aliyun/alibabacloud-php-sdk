<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class PreloadVodObjectCachesRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $objectPath;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'securityToken' => 'SecurityToken',
        'objectPath'    => 'ObjectPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->objectPath) {
            $res['ObjectPath'] = $this->objectPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PreloadVodObjectCachesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ObjectPath'])) {
            $model->objectPath = $map['ObjectPath'];
        }

        return $model;
    }
}
