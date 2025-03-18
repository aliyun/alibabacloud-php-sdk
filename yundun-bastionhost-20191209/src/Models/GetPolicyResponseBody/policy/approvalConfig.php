<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetPolicyResponseBody\policy;

use AlibabaCloud\Tea\Model;

class approvalConfig extends Model
{
    /**
     * @description Indicates whether O\\&M approval is enabled in the control policy. Valid values:
     *
     *   **On**: O\\&M approval is enabled.
     *   **Off**: O\\&M approval is disabled.
     *
     * @example Off
     *
     * @var string
     */
    public $switchStatus;
    protected $_name = [
        'switchStatus' => 'SwitchStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return approvalConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        return $model;
    }
}
