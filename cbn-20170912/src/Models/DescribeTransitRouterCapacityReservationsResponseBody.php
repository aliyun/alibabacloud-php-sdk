<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouterCapacityReservationsResponseBody\deploymentSets;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeTransitRouterCapacityReservationsResponseBody\minimumTransitRouterCapacities;

class DescribeTransitRouterCapacityReservationsResponseBody extends Model
{
    /**
     * @var deploymentSets[]
     */
    public $deploymentSets;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var minimumTransitRouterCapacities[]
     */
    public $minimumTransitRouterCapacities;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'deploymentSets' => 'DeploymentSets',
        'lastModifiedTime' => 'LastModifiedTime',
        'minimumTransitRouterCapacities' => 'MinimumTransitRouterCapacities',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->deploymentSets)) {
            Model::validateArray($this->deploymentSets);
        }
        if (\is_array($this->minimumTransitRouterCapacities)) {
            Model::validateArray($this->minimumTransitRouterCapacities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentSets) {
            if (\is_array($this->deploymentSets)) {
                $res['DeploymentSets'] = [];
                $n1 = 0;
                foreach ($this->deploymentSets as $item1) {
                    $res['DeploymentSets'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->lastModifiedTime) {
            $res['LastModifiedTime'] = $this->lastModifiedTime;
        }

        if (null !== $this->minimumTransitRouterCapacities) {
            if (\is_array($this->minimumTransitRouterCapacities)) {
                $res['MinimumTransitRouterCapacities'] = [];
                $n1 = 0;
                foreach ($this->minimumTransitRouterCapacities as $item1) {
                    $res['MinimumTransitRouterCapacities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DeploymentSets'])) {
            if (!empty($map['DeploymentSets'])) {
                $model->deploymentSets = [];
                $n1 = 0;
                foreach ($map['DeploymentSets'] as $item1) {
                    $model->deploymentSets[$n1] = deploymentSets::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LastModifiedTime'])) {
            $model->lastModifiedTime = $map['LastModifiedTime'];
        }

        if (isset($map['MinimumTransitRouterCapacities'])) {
            if (!empty($map['MinimumTransitRouterCapacities'])) {
                $model->minimumTransitRouterCapacities = [];
                $n1 = 0;
                foreach ($map['MinimumTransitRouterCapacities'] as $item1) {
                    $model->minimumTransitRouterCapacities[$n1] = minimumTransitRouterCapacities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
