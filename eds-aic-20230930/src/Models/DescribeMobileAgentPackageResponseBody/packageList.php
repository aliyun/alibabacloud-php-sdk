<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMobileAgentPackageResponseBody;

use AlibabaCloud\Dara\Model;

class packageList extends Model
{
    /**
     * @var string
     */
    public $expiredAt;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $packageCredit;

    /**
     * @var string
     */
    public $packageId;

    /**
     * @var string
     */
    public $packageSpec;

    /**
     * @var string
     */
    public $packageSpecName;

    /**
     * @var string
     */
    public $packageStatus;

    /**
     * @var string
     */
    public $periodEndTime;

    /**
     * @var string
     */
    public $periodStartTime;

    /**
     * @var string
     */
    public $usedCredit;
    protected $_name = [
        'expiredAt' => 'ExpiredAt',
        'instanceIds' => 'InstanceIds',
        'packageCredit' => 'PackageCredit',
        'packageId' => 'PackageId',
        'packageSpec' => 'PackageSpec',
        'packageSpecName' => 'PackageSpecName',
        'packageStatus' => 'PackageStatus',
        'periodEndTime' => 'PeriodEndTime',
        'periodStartTime' => 'PeriodStartTime',
        'usedCredit' => 'UsedCredit',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->expiredAt) {
            $res['ExpiredAt'] = $this->expiredAt;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->packageCredit) {
            $res['PackageCredit'] = $this->packageCredit;
        }

        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        if (null !== $this->packageSpec) {
            $res['PackageSpec'] = $this->packageSpec;
        }

        if (null !== $this->packageSpecName) {
            $res['PackageSpecName'] = $this->packageSpecName;
        }

        if (null !== $this->packageStatus) {
            $res['PackageStatus'] = $this->packageStatus;
        }

        if (null !== $this->periodEndTime) {
            $res['PeriodEndTime'] = $this->periodEndTime;
        }

        if (null !== $this->periodStartTime) {
            $res['PeriodStartTime'] = $this->periodStartTime;
        }

        if (null !== $this->usedCredit) {
            $res['UsedCredit'] = $this->usedCredit;
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
        if (isset($map['ExpiredAt'])) {
            $model->expiredAt = $map['ExpiredAt'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PackageCredit'])) {
            $model->packageCredit = $map['PackageCredit'];
        }

        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        if (isset($map['PackageSpec'])) {
            $model->packageSpec = $map['PackageSpec'];
        }

        if (isset($map['PackageSpecName'])) {
            $model->packageSpecName = $map['PackageSpecName'];
        }

        if (isset($map['PackageStatus'])) {
            $model->packageStatus = $map['PackageStatus'];
        }

        if (isset($map['PeriodEndTime'])) {
            $model->periodEndTime = $map['PeriodEndTime'];
        }

        if (isset($map['PeriodStartTime'])) {
            $model->periodStartTime = $map['PeriodStartTime'];
        }

        if (isset($map['UsedCredit'])) {
            $model->usedCredit = $map['UsedCredit'];
        }

        return $model;
    }
}
