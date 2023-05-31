<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetPropertyScheduleConfigRequest extends Model
{
    /**
     * @description The type of the asset fingerprints. Valid values:
     *
     *   **scheduler_port_period**: listening port
     *   **scheduler_process_period**: running process
     *   **scheduler_account_period**: account
     *   **scheduler_software_period**: software
     *   **scheduler_cron_period**: scheduled task
     *   **scheduler_sca_period**: middleware
     *   **scheduler_autorun_period**: startup item
     *   **scheduler_lkm_period**: kernel module
     *   **scheduler_sca_proxy_period**: website
     *
     * @example scheduler_sca_period
     *
     * @var string
     */
    public $type;

    /**
     * @description The UUID of the server.
     *
     * >  You can call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) operation to query the UUIDs of servers.
     * @example 50d213b4-3a35-427a-b8a5-04b0c7e1****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'type' => 'Type',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPropertyScheduleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
