<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption\logConfigDetails;
use AlibabaCloud\SDK\Mse\V20190531\Models\GatewayOption\traceDetails;
use AlibabaCloud\Tea\Model;

class GatewayOption extends Model
{
    /**
     * @description 日志配置详情
     *
     * @var logConfigDetails
     */
    public $logConfigDetails;

    /**
     * @description xtrace config option
     *
     * @var traceDetails
     */
    public $traceDetails;
    protected $_name = [
        'logConfigDetails' => 'LogConfigDetails',
        'traceDetails'     => 'TraceDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logConfigDetails) {
            $res['LogConfigDetails'] = null !== $this->logConfigDetails ? $this->logConfigDetails->toMap() : null;
        }
        if (null !== $this->traceDetails) {
            $res['TraceDetails'] = null !== $this->traceDetails ? $this->traceDetails->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GatewayOption
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogConfigDetails'])) {
            $model->logConfigDetails = logConfigDetails::fromMap($map['LogConfigDetails']);
        }
        if (isset($map['TraceDetails'])) {
            $model->traceDetails = traceDetails::fromMap($map['TraceDetails']);
        }

        return $model;
    }
}
