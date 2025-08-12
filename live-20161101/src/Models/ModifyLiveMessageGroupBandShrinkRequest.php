<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class ModifyLiveMessageGroupBandShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $bannedAll;

    /**
     * @var string
     */
    public $bannnedUsersShrink;

    /**
     * @var string
     */
    public $dataCenter;

    /**
     * @var string
     */
    public $exceptUsersShrink;

    /**
     * @var string
     */
    public $groupId;
    protected $_name = [
        'appId' => 'AppId',
        'bannedAll' => 'BannedAll',
        'bannnedUsersShrink' => 'BannnedUsers',
        'dataCenter' => 'DataCenter',
        'exceptUsersShrink' => 'ExceptUsers',
        'groupId' => 'GroupId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->bannedAll) {
            $res['BannedAll'] = $this->bannedAll;
        }

        if (null !== $this->bannnedUsersShrink) {
            $res['BannnedUsers'] = $this->bannnedUsersShrink;
        }

        if (null !== $this->dataCenter) {
            $res['DataCenter'] = $this->dataCenter;
        }

        if (null !== $this->exceptUsersShrink) {
            $res['ExceptUsers'] = $this->exceptUsersShrink;
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

        if (isset($map['BannedAll'])) {
            $model->bannedAll = $map['BannedAll'];
        }

        if (isset($map['BannnedUsers'])) {
            $model->bannnedUsersShrink = $map['BannnedUsers'];
        }

        if (isset($map['DataCenter'])) {
            $model->dataCenter = $map['DataCenter'];
        }

        if (isset($map['ExceptUsers'])) {
            $model->exceptUsersShrink = $map['ExceptUsers'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
