<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DeleteLoginBaseConfigRequest extends Model
{
    /**
     * @description The configuration item that you want to delete. The items vary based on the type of logon configurations. Valid values:
     *
     *   **login\_common_ip**: approved logon IP addresses
     *
     * Example: {"ip":"10.23.23.23"}.
     *
     *   **login\_common_time**: approved logon time ranges
     *
     * Example: {"startTime":"06:00:00","endTime":"16:00:00"}.
     *
     *   **login\_common_account**: approved logon accounts
     *
     * Example: {"account":"test_account\_001"}.
     *
     *   **login\_common_location**: approved logon locations
     *
     * Example: {"location":"Shanghai"}.
     * @example {"startTime":"06:00:00","endTime":"16:00:00"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The UUID of the server whose logon configurations you want to delete.
     *
     * > You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example 4fe8e1cd-3c37-4851-b9de-124da32c****
     *
     * @var string
     */
    public $target;

    /**
     * @description The type of logon configurations to delete. Valid values:
     *
     *   **login\_common_ip**: approved logon IP addresses
     *   **login\_common_time**: approved logon time ranges
     *   **login\_common_account**: approved logon accounts
     *   **login\_common_location**: approved logon locations
     *
     * @example login_common_time
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'config' => 'Config',
        'target' => 'Target',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['Config'] = $this->config;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteLoginBaseConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Config'])) {
            $model->config = $map['Config'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
