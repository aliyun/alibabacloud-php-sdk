<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDeploymentSetsResponseBody\deploymentSets\deploymentSet;

class deploymentSets extends Model
{
    /**
     * @var deploymentSet[]
     */
    public $deploymentSet;
    protected $_name = [
        'deploymentSet' => 'DeploymentSet',
    ];

    public function validate()
    {
        if (\is_array($this->deploymentSet)) {
            Model::validateArray($this->deploymentSet);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentSet) {
            if (\is_array($this->deploymentSet)) {
                $res['DeploymentSet'] = [];
                $n1                   = 0;
                foreach ($this->deploymentSet as $item1) {
                    $res['DeploymentSet'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DeploymentSet'])) {
            if (!empty($map['DeploymentSet'])) {
                $model->deploymentSet = [];
                $n1                   = 0;
                foreach ($map['DeploymentSet'] as $item1) {
                    $model->deploymentSet[$n1++] = deploymentSet::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
