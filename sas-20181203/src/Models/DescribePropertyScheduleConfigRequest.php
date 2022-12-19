<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyScheduleConfigRequest extends Model
{
    /**
     * @description The type of the asset fingerprints to query. Valid values:
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
     * @example scheduler_autorun_period
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'type' => 'Type',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyScheduleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
