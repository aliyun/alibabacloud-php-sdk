<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\SetPolicyApprovalConfigRequest;

use AlibabaCloud\Tea\Model;

class approvalConfig extends Model
{
    /**
     * @example On
     *
     * @var string
     */
    public $switchStatus;
    protected $_name = [
        'switchStatus' => 'SwitchStatus',
    ];

    public function validate()
    {
    }

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
