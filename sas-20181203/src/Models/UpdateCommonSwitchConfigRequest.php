<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateCommonSwitchConfigRequest extends Model
{
    /**
     * @description Specifies whether to turn on the switch for newly added servers. Valid values:
     *
     *   **add**: yes
     *   **del**: no
     *
     * @example add
     *
     * @var string
     */
    public $targetDefault;

    /**
     * @description The type of the switch.
     *
     * >  You can call the [ListClientUserDefineRules](~~ListClientUserDefineRules~~) or [ListSystemClientRules](~~ListSystemClientRules~~) operation to obtain the type from the response parameter SwitchId.
     * @example USER-DEFINE-RULE-SWITCH-TYPE_190****
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'targetDefault' => 'TargetDefault',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetDefault) {
            $res['TargetDefault'] = $this->targetDefault;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCommonSwitchConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetDefault'])) {
            $model->targetDefault = $map['TargetDefault'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
