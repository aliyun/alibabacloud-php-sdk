<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\GetGatewayAuthDetailResponseBody\data\externalAuthZ\service;

class externalAuthZ extends Model
{
    /**
     * @var string[]
     */
    public $allowRequestHeaders;

    /**
     * @var string[]
     */
    public $allowUpstreamHeaders;

    /**
     * @var int
     */
    public $bodyMaxBytes;

    /**
     * @var bool
     */
    public $isRestrict;

    /**
     * @var string
     */
    public $prefixPath;

    /**
     * @var service
     */
    public $service;

    /**
     * @var int
     */
    public $serviceId;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $tokenKey;

    /**
     * @var bool
     */
    public $withRematchRoute;

    /**
     * @var bool
     */
    public $withRequestBody;
    protected $_name = [
        'allowRequestHeaders' => 'AllowRequestHeaders',
        'allowUpstreamHeaders' => 'AllowUpstreamHeaders',
        'bodyMaxBytes' => 'BodyMaxBytes',
        'isRestrict' => 'IsRestrict',
        'prefixPath' => 'PrefixPath',
        'service' => 'Service',
        'serviceId' => 'ServiceId',
        'timeout' => 'Timeout',
        'tokenKey' => 'TokenKey',
        'withRematchRoute' => 'WithRematchRoute',
        'withRequestBody' => 'WithRequestBody',
    ];

    public function validate()
    {
        if (\is_array($this->allowRequestHeaders)) {
            Model::validateArray($this->allowRequestHeaders);
        }
        if (\is_array($this->allowUpstreamHeaders)) {
            Model::validateArray($this->allowUpstreamHeaders);
        }
        if (null !== $this->service) {
            $this->service->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allowRequestHeaders) {
            if (\is_array($this->allowRequestHeaders)) {
                $res['AllowRequestHeaders'] = [];
                $n1 = 0;
                foreach ($this->allowRequestHeaders as $item1) {
                    $res['AllowRequestHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->allowUpstreamHeaders) {
            if (\is_array($this->allowUpstreamHeaders)) {
                $res['AllowUpstreamHeaders'] = [];
                $n1 = 0;
                foreach ($this->allowUpstreamHeaders as $item1) {
                    $res['AllowUpstreamHeaders'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->bodyMaxBytes) {
            $res['BodyMaxBytes'] = $this->bodyMaxBytes;
        }

        if (null !== $this->isRestrict) {
            $res['IsRestrict'] = $this->isRestrict;
        }

        if (null !== $this->prefixPath) {
            $res['PrefixPath'] = $this->prefixPath;
        }

        if (null !== $this->service) {
            $res['Service'] = null !== $this->service ? $this->service->toArray($noStream) : $this->service;
        }

        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        if (null !== $this->tokenKey) {
            $res['TokenKey'] = $this->tokenKey;
        }

        if (null !== $this->withRematchRoute) {
            $res['WithRematchRoute'] = $this->withRematchRoute;
        }

        if (null !== $this->withRequestBody) {
            $res['WithRequestBody'] = $this->withRequestBody;
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
        if (isset($map['AllowRequestHeaders'])) {
            if (!empty($map['AllowRequestHeaders'])) {
                $model->allowRequestHeaders = [];
                $n1 = 0;
                foreach ($map['AllowRequestHeaders'] as $item1) {
                    $model->allowRequestHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AllowUpstreamHeaders'])) {
            if (!empty($map['AllowUpstreamHeaders'])) {
                $model->allowUpstreamHeaders = [];
                $n1 = 0;
                foreach ($map['AllowUpstreamHeaders'] as $item1) {
                    $model->allowUpstreamHeaders[$n1++] = $item1;
                }
            }
        }

        if (isset($map['BodyMaxBytes'])) {
            $model->bodyMaxBytes = $map['BodyMaxBytes'];
        }

        if (isset($map['IsRestrict'])) {
            $model->isRestrict = $map['IsRestrict'];
        }

        if (isset($map['PrefixPath'])) {
            $model->prefixPath = $map['PrefixPath'];
        }

        if (isset($map['Service'])) {
            $model->service = service::fromMap($map['Service']);
        }

        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        if (isset($map['TokenKey'])) {
            $model->tokenKey = $map['TokenKey'];
        }

        if (isset($map['WithRematchRoute'])) {
            $model->withRematchRoute = $map['WithRematchRoute'];
        }

        if (isset($map['WithRequestBody'])) {
            $model->withRequestBody = $map['WithRequestBody'];
        }

        return $model;
    }
}
