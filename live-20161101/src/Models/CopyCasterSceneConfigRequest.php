<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CopyCasterSceneConfigRequest extends Model
{
    /**
     * @var string
     */
    public $casterId;

    /**
     * @var string
     */
    public $fromSceneId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $toSceneId;
    protected $_name = [
        'casterId'    => 'CasterId',
        'fromSceneId' => 'FromSceneId',
        'ownerId'     => 'OwnerId',
        'toSceneId'   => 'ToSceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->fromSceneId) {
            $res['FromSceneId'] = $this->fromSceneId;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->toSceneId) {
            $res['ToSceneId'] = $this->toSceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyCasterSceneConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['FromSceneId'])) {
            $model->fromSceneId = $map['FromSceneId'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ToSceneId'])) {
            $model->toSceneId = $map['ToSceneId'];
        }

        return $model;
    }
}
