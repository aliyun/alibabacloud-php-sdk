<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetInstanceAlarmStatisticsRequest extends Model
{
    /**
     * @description The data source for statistics on instance alarms, with a default value of aqs:
     * - *sas*: Situation Awareness data source
     * - *aqs*: Alarm event data
     * - *honeypot*: Honeypot
     *
     * @example sas
     *
     * @var string
     */
    public $from;

    /**
     * @description The UUID of the server to be queried.
     * > Call the [DescribeCloudCenterInstances](~~DescribeCloudCenterInstances~~) API to obtain this parameter.
     *
     * @example 00fea5a1-9792-4373-ab1e-bb6536ba****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'from' => 'From',
        'uuid' => 'Uuid',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->from) {
            $res['From'] = $this->from;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetInstanceAlarmStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['From'])) {
            $model->from = $map['From'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
