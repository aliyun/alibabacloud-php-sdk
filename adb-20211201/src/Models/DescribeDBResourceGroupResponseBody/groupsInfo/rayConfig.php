<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo\rayConfig\appConfig;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo\rayConfig\storageMounts;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBResourceGroupResponseBody\groupsInfo\rayConfig\workerGroups;

class rayConfig extends Model
{
    /**
     * @var appConfig
     */
    public $appConfig;

    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $enableUserEni;

    /**
     * @var string
     */
    public $headAllocateUnit;

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
     * @var storageMounts[]
     */
    public $storageMounts;

    /**
     * @var workerGroups[]
     */
    public $workerGroups;
    protected $_name = [
        'appConfig' => 'AppConfig',
        'category' => 'Category',
        'enableUserEni' => 'EnableUserEni',
        'headAllocateUnit' => 'HeadAllocateUnit',
        'headDiskCapacity' => 'HeadDiskCapacity',
        'headSpec' => 'HeadSpec',
        'headSpecType' => 'HeadSpecType',
        'rayClusterAddress' => 'RayClusterAddress',
        'rayDashboardAddress' => 'RayDashboardAddress',
        'rayGrafanaAddress' => 'RayGrafanaAddress',
        'storageMounts' => 'StorageMounts',
        'workerGroups' => 'WorkerGroups',
    ];

    public function validate()
    {
        if (null !== $this->appConfig) {
            $this->appConfig->validate();
        }
        if (\is_array($this->storageMounts)) {
            Model::validateArray($this->storageMounts);
        }
        if (\is_array($this->workerGroups)) {
            Model::validateArray($this->workerGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['AppConfig'] = null !== $this->appConfig ? $this->appConfig->toArray($noStream) : $this->appConfig;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->enableUserEni) {
            $res['EnableUserEni'] = $this->enableUserEni;
        }

        if (null !== $this->headAllocateUnit) {
            $res['HeadAllocateUnit'] = $this->headAllocateUnit;
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

        if (null !== $this->storageMounts) {
            if (\is_array($this->storageMounts)) {
                $res['StorageMounts'] = [];
                $n1 = 0;
                foreach ($this->storageMounts as $item1) {
                    $res['StorageMounts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AppConfig'])) {
            $model->appConfig = appConfig::fromMap($map['AppConfig']);
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['EnableUserEni'])) {
            $model->enableUserEni = $map['EnableUserEni'];
        }

        if (isset($map['HeadAllocateUnit'])) {
            $model->headAllocateUnit = $map['HeadAllocateUnit'];
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

        if (isset($map['StorageMounts'])) {
            if (!empty($map['StorageMounts'])) {
                $model->storageMounts = [];
                $n1 = 0;
                foreach ($map['StorageMounts'] as $item1) {
                    $model->storageMounts[$n1] = storageMounts::fromMap($item1);
                    ++$n1;
                }
            }
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
