<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\loadBalancerSettings;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\TrafficPolicy\loadBalancerSettings\consistentHashLBConfig\httpCookie;

class consistentHashLBConfig extends Model
{
    /**
     * @var string
     */
    public $consistentHashLBType;

    /**
     * @var httpCookie
     */
    public $httpCookie;

    /**
     * @var string
     */
    public $parameterName;
    protected $_name = [
        'consistentHashLBType' => 'ConsistentHashLBType',
        'httpCookie' => 'HttpCookie',
        'parameterName' => 'ParameterName',
    ];

    public function validate()
    {
        if (null !== $this->httpCookie) {
            $this->httpCookie->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consistentHashLBType) {
            $res['ConsistentHashLBType'] = $this->consistentHashLBType;
        }

        if (null !== $this->httpCookie) {
            $res['HttpCookie'] = null !== $this->httpCookie ? $this->httpCookie->toArray($noStream) : $this->httpCookie;
        }

        if (null !== $this->parameterName) {
            $res['ParameterName'] = $this->parameterName;
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
        if (isset($map['ConsistentHashLBType'])) {
            $model->consistentHashLBType = $map['ConsistentHashLBType'];
        }

        if (isset($map['HttpCookie'])) {
            $model->httpCookie = httpCookie::fromMap($map['HttpCookie']);
        }

        if (isset($map['ParameterName'])) {
            $model->parameterName = $map['ParameterName'];
        }

        return $model;
    }
}
