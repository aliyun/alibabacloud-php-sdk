<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\Dara\Model;

class DeleteLoadBalancerRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string[]
     */
    public $retainResourceType;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'dryRun' => 'DryRun',
        'loadBalancerId' => 'LoadBalancerId',
        'retainResourceType' => 'RetainResourceType',
    ];

    public function validate()
    {
        if (\is_array($this->retainResourceType)) {
            Model::validateArray($this->retainResourceType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }

        if (null !== $this->retainResourceType) {
            if (\is_array($this->retainResourceType)) {
                $res['RetainResourceType'] = [];
                $n1 = 0;
                foreach ($this->retainResourceType as $item1) {
                    $res['RetainResourceType'][$n1] = $item1;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }

        if (isset($map['RetainResourceType'])) {
            if (!empty($map['RetainResourceType'])) {
                $model->retainResourceType = [];
                $n1 = 0;
                foreach ($map['RetainResourceType'] as $item1) {
                    $model->retainResourceType[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
