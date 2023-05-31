<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListClientUserDefineRulesResponseBody;

use AlibabaCloud\Tea\Model;

class userDefineRuleList extends Model
{
    /**
     * @description The action of the rule. Valid values:
     *
     *   **0**: allow
     *   **1**: block
     *
     * @example 0
     *
     * @var int
     */
    public $actionType;

    /**
     * @description The ID of the rule.
     *
     * @example 200****
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the rule.
     *
     * @example Rule\*\*\*\*
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the operating system. Valid values:
     *
     *   **windows**: Windows
     *   **linux**: Linux
     *   **all**: all types
     *
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description The switch ID of the rule.
     *
     * @example USER-DEFINE-RULE-SWITCH-TYPE_200****
     *
     * @var string
     */
    public $switchId;

    /**
     * @description The type of the rule. Valid values:
     *
     *   **1**: Process hash
     *   **2**: Command line
     *   **3**: Process Network
     *   **4**: File Read and Write
     *   **5**: Operation on Registry
     *   **6**: Dynamic-link Library Loading
     *   **7**: File Renaming
     *
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
