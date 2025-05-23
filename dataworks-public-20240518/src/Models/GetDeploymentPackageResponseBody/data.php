<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentPackageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentPackageResponseBody\data\deployedItems;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDeploymentPackageResponseBody\data\deployment;

class data extends Model
{
    /**
     * @var deployedItems[]
     */
    public $deployedItems;

    /**
     * @var deployment
     */
    public $deployment;
    protected $_name = [
        'deployedItems' => 'DeployedItems',
        'deployment' => 'Deployment',
    ];

    public function validate()
    {
        if (\is_array($this->deployedItems)) {
            Model::validateArray($this->deployedItems);
        }
        if (null !== $this->deployment) {
            $this->deployment->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deployedItems) {
            if (\is_array($this->deployedItems)) {
                $res['DeployedItems'] = [];
                $n1 = 0;
                foreach ($this->deployedItems as $item1) {
                    $res['DeployedItems'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->deployment) {
            $res['Deployment'] = null !== $this->deployment ? $this->deployment->toArray($noStream) : $this->deployment;
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
        if (isset($map['DeployedItems'])) {
            if (!empty($map['DeployedItems'])) {
                $model->deployedItems = [];
                $n1 = 0;
                foreach ($map['DeployedItems'] as $item1) {
                    $model->deployedItems[$n1++] = deployedItems::fromMap($item1);
                }
            }
        }

        if (isset($map['Deployment'])) {
            $model->deployment = deployment::fromMap($map['Deployment']);
        }

        return $model;
    }
}
