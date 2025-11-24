<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Servicemesh\V20200111\Models\UpdateIstioGatewayRoutesRequest\gatewayRoute\HTTPAdvancedOptions\retries\retryRemoteLocalities;

class retries extends Model
{
    /**
     * @var int
     */
    public $attempts;

    /**
     * @var string
     */
    public $perTryTimeout;

    /**
     * @var string
     */
    public $retryOn;

    /**
     * @var retryRemoteLocalities
     */
    public $retryRemoteLocalities;
    protected $_name = [
        'attempts' => 'Attempts',
        'perTryTimeout' => 'PerTryTimeout',
        'retryOn' => 'RetryOn',
        'retryRemoteLocalities' => 'RetryRemoteLocalities',
    ];

    public function validate()
    {
        if (null !== $this->retryRemoteLocalities) {
            $this->retryRemoteLocalities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attempts) {
            $res['Attempts'] = $this->attempts;
        }

        if (null !== $this->perTryTimeout) {
            $res['PerTryTimeout'] = $this->perTryTimeout;
        }

        if (null !== $this->retryOn) {
            $res['RetryOn'] = $this->retryOn;
        }

        if (null !== $this->retryRemoteLocalities) {
            $res['RetryRemoteLocalities'] = null !== $this->retryRemoteLocalities ? $this->retryRemoteLocalities->toArray($noStream) : $this->retryRemoteLocalities;
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
        if (isset($map['Attempts'])) {
            $model->attempts = $map['Attempts'];
        }

        if (isset($map['PerTryTimeout'])) {
            $model->perTryTimeout = $map['PerTryTimeout'];
        }

        if (isset($map['RetryOn'])) {
            $model->retryOn = $map['RetryOn'];
        }

        if (isset($map['RetryRemoteLocalities'])) {
            $model->retryRemoteLocalities = retryRemoteLocalities::fromMap($map['RetryRemoteLocalities']);
        }

        return $model;
    }
}
