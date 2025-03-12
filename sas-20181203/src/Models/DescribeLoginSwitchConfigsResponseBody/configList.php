<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeLoginSwitchConfigsResponseBody;

use AlibabaCloud\Tea\Model;

class configList extends Model
{
    /**
     * @description The type of the alert that you enabled or disabled. Valid values:
     *
     *   **login_common_ip**: alerts for unapproved logon IP addresses
     *   **login_common_time**: alerts for unapproved logon time ranges
     *   **login_common_account**: alerts for unapproved logon accounts
     *
     * @example login_common_ip
     *
     * @var string
     */
    public $item;

    /**
     * @description The status of the Log Service feature. Valid values:
     *
     *   **0**: The feature is disabled.
     *   **1**: The feature is enabled.
     *
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
     * @return configList
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
