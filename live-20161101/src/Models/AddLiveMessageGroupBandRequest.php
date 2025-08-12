<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class AddLiveMessageGroupBandRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string[]
     */
    public $bannedUsers;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'appId' => 'AppId',
        'bannedUsers' => 'BannedUsers',
        'dataCenter' => 'DataCenter',
        'groupId' => 'GroupId',
    ];

    public function validate()
    {
        if (\is_array($this->bannedUsers)) {
            Model::validateArray($this->bannedUsers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->bannedUsers) {
            if (\is_array($this->bannedUsers)) {
                $res['BannedUsers'] = [];
                $n1 = 0;
                foreach ($this->bannedUsers as $item1) {
                    $res['BannedUsers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['BannedUsers'])) {
            if (!empty($map['BannedUsers'])) {
                $model->bannedUsers = [];
                $n1 = 0;
                foreach ($map['BannedUsers'] as $item1) {
                    $model->bannedUsers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
