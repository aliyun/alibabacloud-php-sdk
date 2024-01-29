<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class InvokeDiagnosisRequest extends Model
{
    /**
     * @example cloud_assist
     *
     * @var string
     */
    public $channel;

    /**
     * @example {
     * }
     * @var string
     */
    public $params;

    /**
     * @example memgraph
     *
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'channel'     => 'channel',
        'params'      => 'params',
        'serviceName' => 'service_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->params) {
            $res['params'] = $this->params;
        }
        if (null !== $this->serviceName) {
            $res['service_name'] = $this->serviceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InvokeDiagnosisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['channel'])) {
            $model->channel = $map['channel'];
        }
        if (isset($map['params'])) {
            $model->params = $map['params'];
        }
        if (isset($map['service_name'])) {
            $model->serviceName = $map['service_name'];
        }

        return $model;
    }
}
