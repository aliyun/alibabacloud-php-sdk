<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody\platforms;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ADBAI\V20250812\Models\DescribeEmbodiedAIPlatformsResponseBody\platforms\rayConfig\workerGroups;

class rayConfig extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $headDiskCapacity;

    /**
     * @var string
     */
    public $headSpec;

    /**
     * @var string
     */
    public $headSpecType;

    /**
     * @var string
     */
    public $rayClusterAddress;

    /**
     * @var string
     */
    public $rayDashboardAddress;

    /**
     * @var string
     */
    public $rayGrafanaAddress;

    /**
     * @var workerGroups[]
     */
    public $workerGroups;
    protected $_name = [
        'category' => 'Category',
        'headDiskCapacity' => 'HeadDiskCapacity',
        'headSpec' => 'HeadSpec',
        'headSpecType' => 'HeadSpecType',
        'rayClusterAddress' => 'RayClusterAddress',
        'rayDashboardAddress' => 'RayDashboardAddress',
        'rayGrafanaAddress' => 'RayGrafanaAddress',
        'workerGroups' => 'WorkerGroups',
    ];

    public function validate()
    {
        if (\is_array($this->workerGroups)) {
            Model::validateArray($this->workerGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->headDiskCapacity) {
            $res['HeadDiskCapacity'] = $this->headDiskCapacity;
        }

        if (null !== $this->headSpec) {
            $res['HeadSpec'] = $this->headSpec;
        }

        if (null !== $this->headSpecType) {
            $res['HeadSpecType'] = $this->headSpecType;
        }

        if (null !== $this->rayClusterAddress) {
            $res['RayClusterAddress'] = $this->rayClusterAddress;
        }

        if (null !== $this->rayDashboardAddress) {
            $res['RayDashboardAddress'] = $this->rayDashboardAddress;
        }

        if (null !== $this->rayGrafanaAddress) {
            $res['RayGrafanaAddress'] = $this->rayGrafanaAddress;
        }

        if (null !== $this->workerGroups) {
            if (\is_array($this->workerGroups)) {
                $res['WorkerGroups'] = [];
                $n1 = 0;
                foreach ($this->workerGroups as $item1) {
                    $res['WorkerGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['HeadDiskCapacity'])) {
            $model->headDiskCapacity = $map['HeadDiskCapacity'];
        }

        if (isset($map['HeadSpec'])) {
            $model->headSpec = $map['HeadSpec'];
        }

        if (isset($map['HeadSpecType'])) {
            $model->headSpecType = $map['HeadSpecType'];
        }

        if (isset($map['RayClusterAddress'])) {
            $model->rayClusterAddress = $map['RayClusterAddress'];
        }

        if (isset($map['RayDashboardAddress'])) {
            $model->rayDashboardAddress = $map['RayDashboardAddress'];
        }

        if (isset($map['RayGrafanaAddress'])) {
            $model->rayGrafanaAddress = $map['RayGrafanaAddress'];
        }

        if (isset($map['WorkerGroups'])) {
            if (!empty($map['WorkerGroups'])) {
                $model->workerGroups = [];
                $n1 = 0;
                foreach ($map['WorkerGroups'] as $item1) {
                    $model->workerGroups[$n1] = workerGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
