<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\UpdateAppMemberRequest\player;

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
     * @var string
     */
    public $organizationId;
    protected $_name = [
        'player' => 'player',
        'roleNames' => 'roleNames',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
        if (null !== $this->player) {
            $this->player->validate();
        }
        if (\is_array($this->roleNames)) {
            Model::validateArray($this->roleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->player) {
            $res['player'] = null !== $this->player ? $this->player->toArray($noStream) : $this->player;
        }

        if (null !== $this->roleNames) {
            if (\is_array($this->roleNames)) {
                $res['roleNames'] = [];
                $n1 = 0;
                foreach ($this->roleNames as $item1) {
                    $res['roleNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
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
        if (isset($map['player'])) {
            $model->player = player::fromMap($map['player']);
        }

        if (isset($map['roleNames'])) {
            if (!empty($map['roleNames'])) {
                $model->roleNames = [];
                $n1 = 0;
                foreach ($map['roleNames'] as $item1) {
                    $model->roleNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
