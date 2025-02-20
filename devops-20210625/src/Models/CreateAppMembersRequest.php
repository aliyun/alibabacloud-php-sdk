<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\CreateAppMembersRequest\playerList;

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
        if (\is_array($this->playerList)) {
            Model::validateArray($this->playerList);
        }
        if (\is_array($this->roleNames)) {
            Model::validateArray($this->roleNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->playerList) {
            if (\is_array($this->playerList)) {
                $res['playerList'] = [];
                $n1                = 0;
                foreach ($this->playerList as $item1) {
                    $res['playerList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->roleNames) {
            if (\is_array($this->roleNames)) {
                $res['roleNames'] = [];
                $n1               = 0;
                foreach ($this->roleNames as $item1) {
                    $res['roleNames'][$n1++] = $item1;
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
        if (isset($map['playerList'])) {
            if (!empty($map['playerList'])) {
                $model->playerList = [];
                $n1                = 0;
                foreach ($map['playerList'] as $item1) {
                    $model->playerList[$n1++] = playerList::fromMap($item1);
                }
            }
        }

        if (isset($map['roleNames'])) {
            if (!empty($map['roleNames'])) {
                $model->roleNames = [];
                $n1               = 0;
                foreach ($map['roleNames'] as $item1) {
                    $model->roleNames[$n1++] = $item1;
                }
            }
        }

        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        return $model;
    }
}
