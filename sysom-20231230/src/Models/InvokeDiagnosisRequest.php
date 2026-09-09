<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Dara\Model;

class InvokeDiagnosisRequest extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $params;

    /**
     * @var string
     */
    public $serviceName;
    protected $_name = [
        'channel' => 'channel',
        'params' => 'params',
        'serviceName' => 'service_name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
