<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\CreateLoggingRequest;

use AlibabaCloud\Tea\Model;

class loggingDetails extends Model
{
    /**
     * @description 该种类服务日志要保存到的 logstore 名称。
     *
     * @var string
     */
    public $logstore;

    /**
     * @description 服务日志的种类。可选 "consumergroup_log"、 "logtail_alarm"、"operation_log"、"logtail_profile"、"metering"、"logtail_status"、"scheduled_sql_alert"、 "etl_alert" 等。
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'logstore' => 'logstore',
        'type'     => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logstore) {
            $res['logstore'] = $this->logstore;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return loggingDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['logstore'])) {
            $model->logstore = $map['logstore'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
