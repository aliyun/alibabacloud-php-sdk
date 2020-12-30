<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeGroupSimpleListResponseBody;

use AlibabaCloud\Tea\Model;

class groupList extends Model
{
    /**
     * @var bool
     */
    public $isDnsEnabled;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var bool
     */
    public $isDisabled;
    protected $_name = [
        'isDnsEnabled' => 'IsDnsEnabled',
        'groupId'      => 'GroupId',
        'groupName'    => 'GroupName',
        'appId'        => 'AppId',
        'bizId'        => 'BizId',
        'isDisabled'   => 'IsDisabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDnsEnabled) {
            $res['IsDnsEnabled'] = $this->isDnsEnabled;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->isDisabled) {
            $res['IsDisabled'] = $this->isDisabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDnsEnabled'])) {
            $model->isDnsEnabled = $map['IsDnsEnabled'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['IsDisabled'])) {
            $model->isDisabled = $map['IsDisabled'];
        }

        return $model;
    }
}
