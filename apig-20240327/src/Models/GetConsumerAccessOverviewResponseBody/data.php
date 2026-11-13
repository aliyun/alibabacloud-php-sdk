<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\gateway;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\impacts;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\quotas;
use AlibabaCloud\SDK\APIG\V20240327\Models\GetConsumerAccessOverviewResponseBody\data\resources;

class data extends Model
{
    /**
     * @var bool
     */
    public $complete;

    /**
     * @var gateway
     */
    public $gateway;

    /**
     * @var string
     */
    public $identityDescription;

    /**
     * @var impacts[]
     */
    public $impacts;

    /**
     * @var quotas[]
     */
    public $quotas;

    /**
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'complete' => 'complete',
        'gateway' => 'gateway',
        'identityDescription' => 'identityDescription',
        'impacts' => 'impacts',
        'quotas' => 'quotas',
        'resources' => 'resources',
    ];

    public function validate()
    {
        if (null !== $this->gateway) {
            $this->gateway->validate();
        }
        if (\is_array($this->impacts)) {
            Model::validateArray($this->impacts);
        }
        if (\is_array($this->quotas)) {
            Model::validateArray($this->quotas);
        }
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->complete) {
            $res['complete'] = $this->complete;
        }

        if (null !== $this->gateway) {
            $res['gateway'] = null !== $this->gateway ? $this->gateway->toArray($noStream) : $this->gateway;
        }

        if (null !== $this->identityDescription) {
            $res['identityDescription'] = $this->identityDescription;
        }

        if (null !== $this->impacts) {
            if (\is_array($this->impacts)) {
                $res['impacts'] = [];
                $n1 = 0;
                foreach ($this->impacts as $item1) {
                    $res['impacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quotas) {
            if (\is_array($this->quotas)) {
                $res['quotas'] = [];
                $n1 = 0;
                foreach ($this->quotas as $item1) {
                    $res['quotas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['resources'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['complete'])) {
            $model->complete = $map['complete'];
        }

        if (isset($map['gateway'])) {
            $model->gateway = gateway::fromMap($map['gateway']);
        }

        if (isset($map['identityDescription'])) {
            $model->identityDescription = $map['identityDescription'];
        }

        if (isset($map['impacts'])) {
            if (!empty($map['impacts'])) {
                $model->impacts = [];
                $n1 = 0;
                foreach ($map['impacts'] as $item1) {
                    $model->impacts[$n1] = impacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['quotas'])) {
            if (!empty($map['quotas'])) {
                $model->quotas = [];
                $n1 = 0;
                foreach ($map['quotas'] as $item1) {
                    $model->quotas[$n1] = quotas::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['resources'] as $item1) {
                    $model->resources[$n1] = resources::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
