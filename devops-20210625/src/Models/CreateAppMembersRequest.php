<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\SDK\Devops\V20210625\Models\CreateAppMembersRequest\playerList;
use AlibabaCloud\Tea\Model;

class CreateAppMembersRequest extends Model
{
    /**
     * @var playerList[]
     */
    public $playerList;

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
        'playerList'     => 'playerList',
        'roleNames'      => 'roleNames',
        'organizationId' => 'organizationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->playerList) {
            $res['playerList'] = [];
            if (null !== $this->playerList && \is_array($this->playerList)) {
                $n = 0;
                foreach ($this->playerList as $item) {
                    $res['playerList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return CreateAppMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['playerList'])) {
            if (!empty($map['playerList'])) {
                $model->playerList = [];
                $n                 = 0;
                foreach ($map['playerList'] as $item) {
                    $model->playerList[$n++] = null !== $item ? playerList::fromMap($item) : $item;
                }
            }
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
