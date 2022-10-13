<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponseBody;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponseBody\data\deployedItems;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDeploymentResponseBody\data\deployment;
use AlibabaCloud\Tea\Model;

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
        'deployment'    => 'Deployment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deployedItems) {
            $res['DeployedItems'] = [];
            if (null !== $this->deployedItems && \is_array($this->deployedItems)) {
                $n = 0;
                foreach ($this->deployedItems as $item) {
                    $res['DeployedItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->deployment) {
            $res['Deployment'] = null !== $this->deployment ? $this->deployment->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeployedItems'])) {
            if (!empty($map['DeployedItems'])) {
                $model->deployedItems = [];
                $n                    = 0;
                foreach ($map['DeployedItems'] as $item) {
                    $model->deployedItems[$n++] = null !== $item ? deployedItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Deployment'])) {
            $model->deployment = deployment::fromMap($map['Deployment']);
        }

        return $model;
    }
}
