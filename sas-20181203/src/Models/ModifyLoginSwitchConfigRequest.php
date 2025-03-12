<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyLoginSwitchConfigRequest extends Model
{
    /**
     * @description The type of the logon security settings that you want to enable or disable. Valid values:
     *
     *   **login_common_ip**: unapproved logon IP addresses
     *   **login_common_time**: unapproved logon time ranges
     *   **login_common_account**: unapproved logon accounts
     *
     * This parameter is required.
     * @example login_common_account
     *
     * @var string
     */
    public $item;

    /**
     * @description Specifies whether to enable the logon security settings. Valid values:
     *
     *   **0**: no
     *   **1**: yes
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'item'   => 'Item',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->item) {
            $res['Item'] = $this->item;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyLoginSwitchConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Item'])) {
            $model->item = $map['Item'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
