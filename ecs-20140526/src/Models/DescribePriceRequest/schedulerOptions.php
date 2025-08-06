<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribePriceRequest;

use AlibabaCloud\Dara\Model;

class schedulerOptions extends Model
{
    /**
     * @var string
     */
    public $dedicatedHostId;

    /**
     * @var string
     */
    public $deploymentSetStrategy;
    protected $_name = [
        'dedicatedHostId' => 'DedicatedHostId',
        'deploymentSetStrategy' => 'DeploymentSetStrategy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dedicatedHostId) {
            $res['DedicatedHostId'] = $this->dedicatedHostId;
        }

        if (null !== $this->deploymentSetStrategy) {
            $res['DeploymentSetStrategy'] = $this->deploymentSetStrategy;
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
        if (isset($map['DedicatedHostId'])) {
            $model->dedicatedHostId = $map['DedicatedHostId'];
        }

        if (isset($map['DeploymentSetStrategy'])) {
            $model->deploymentSetStrategy = $map['DeploymentSetStrategy'];
        }

        return $model;
    }
}
