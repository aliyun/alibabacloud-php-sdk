<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListGatewayApisResponseBody\apis;

use AlibabaCloud\Dara\Model;

class migrateRule extends Model
{
    /**
     * @var int
     */
    public $flowPercent;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var bool
     */
    public $needMigrate;

    /**
     * @var bool
     */
    public $needSwitchCompletely;

    /**
     * @var string
     */
    public $upstreamType;
    protected $_name = [
        'flowPercent' => 'FlowPercent',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'needMigrate' => 'NeedMigrate',
        'needSwitchCompletely' => 'NeedSwitchCompletely',
        'upstreamType' => 'UpstreamType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->flowPercent) {
            $res['FlowPercent'] = $this->flowPercent;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->needMigrate) {
            $res['NeedMigrate'] = $this->needMigrate;
        }

        if (null !== $this->needSwitchCompletely) {
            $res['NeedSwitchCompletely'] = $this->needSwitchCompletely;
        }

        if (null !== $this->upstreamType) {
            $res['UpstreamType'] = $this->upstreamType;
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
        if (isset($map['FlowPercent'])) {
            $model->flowPercent = $map['FlowPercent'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['NeedMigrate'])) {
            $model->needMigrate = $map['NeedMigrate'];
        }

        if (isset($map['NeedSwitchCompletely'])) {
            $model->needSwitchCompletely = $map['NeedSwitchCompletely'];
        }

        if (isset($map['UpstreamType'])) {
            $model->upstreamType = $map['UpstreamType'];
        }

        return $model;
    }
}
