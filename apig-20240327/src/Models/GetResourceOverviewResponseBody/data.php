<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\api;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\gateway;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetResourceOverviewResponseBody\data\riskOverview;

class data extends Model
{
    /**
     * @var api
     */
    public $api;

    /**
     * @var gateway
     */
    public $gateway;

    /**
     * @var riskOverview[]
     */
    public $riskOverview;
    protected $_name = [
        'api' => 'api',
        'gateway' => 'gateway',
        'riskOverview' => 'riskOverview',
    ];

    public function validate()
    {
        if (null !== $this->api) {
            $this->api->validate();
        }
        if (null !== $this->gateway) {
            $this->gateway->validate();
        }
        if (\is_array($this->riskOverview)) {
            Model::validateArray($this->riskOverview);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['api'] = null !== $this->api ? $this->api->toArray($noStream) : $this->api;
        }

        if (null !== $this->gateway) {
            $res['gateway'] = null !== $this->gateway ? $this->gateway->toArray($noStream) : $this->gateway;
        }

        if (null !== $this->riskOverview) {
            if (\is_array($this->riskOverview)) {
                $res['riskOverview'] = [];
                $n1 = 0;
                foreach ($this->riskOverview as $item1) {
                    $res['riskOverview'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['api'])) {
            $model->api = api::fromMap($map['api']);
        }

        if (isset($map['gateway'])) {
            $model->gateway = gateway::fromMap($map['gateway']);
        }

        if (isset($map['riskOverview'])) {
            if (!empty($map['riskOverview'])) {
                $model->riskOverview = [];
                $n1 = 0;
                foreach ($map['riskOverview'] as $item1) {
                    $model->riskOverview[$n1] = riskOverview::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
