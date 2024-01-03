<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateAppMemberRequest\player;
use AlibabaCloud\Tea\Model;

class UpdateAppMemberRequest extends Model
{
    /**
     * @var player
     */
    public $player;

    /**
     * @var string[]
     */
    public $roleNames;

    /**
     * @example 66c0c9fffeb86b450c199fcd
     *
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'player'         => 'player',
        'roleNames'      => 'roleNames',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->player) {
            $res['player'] = null !== $this->player ? $this->player->toMap() : null;
        }
        if (null !== $this->roleNames) {
            $res['roleNames'] = $this->roleNames;
        }
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAppMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['player'])) {
            $model->player = player::fromMap($map['player']);
        }
        if (isset($map['roleNames'])) {
            if (!empty($map['roleNames'])) {
                $model->roleNames = $map['roleNames'];
            }
        }
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
