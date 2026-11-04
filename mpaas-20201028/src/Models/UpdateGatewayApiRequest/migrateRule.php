<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\UpdateGatewayApiRequest;

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
     * @var bool
     */
    public $needMigrate;

    /**
     * @var bool
     */
    public $needSwitchCompletely;
    protected $_name = [
        'flowPercent' => 'FlowPercent',
        'groupId' => 'GroupId',
        'needMigrate' => 'NeedMigrate',
        'needSwitchCompletely' => 'NeedSwitchCompletely',
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

        if (null !== $this->needMigrate) {
            $res['NeedMigrate'] = $this->needMigrate;
        }

        if (null !== $this->needSwitchCompletely) {
            $res['NeedSwitchCompletely'] = $this->needSwitchCompletely;
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

        if (isset($map['NeedMigrate'])) {
            $model->needMigrate = $map['NeedMigrate'];
        }

        if (isset($map['NeedSwitchCompletely'])) {
            $model->needSwitchCompletely = $map['NeedSwitchCompletely'];
        }

        return $model;
    }
}
