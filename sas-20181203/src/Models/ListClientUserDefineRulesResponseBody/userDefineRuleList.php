<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesResponseBody;

use AlibabaCloud\Tea\Model;

class userDefineRuleList extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $actionType;

    /**
     * @example 200****
     *
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @example USER-DEFINE-RULE-SWITCH-TYPE_200****
     *
     * @var string
     */
    public $switchId;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'actionType' => 'ActionType',
        'id'         => 'Id',
        'name'       => 'Name',
        'platform'   => 'Platform',
        'switchId'   => 'SwitchId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userDefineRuleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
