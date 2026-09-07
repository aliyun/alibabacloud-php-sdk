<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDesktopsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDesktopsResponseBody\vulDesktops\cves;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVulDesktopsResponseBody\vulDesktops\fixRecords;

class vulDesktops extends Model
{
    /**
     * @var string
     */
    public $configGroupId;

    /**
     * @var int
     */
    public $cveCount;

    /**
     * @var cves[]
     */
    public $cves;

    /**
     * @var string
     */
    public $desktopId;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var string
     */
    public $firstFoundTime;

    /**
     * @var fixRecords[]
     */
    public $fixRecords;

    /**
     * @var string[]
     */
    public $patchIds;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $vulLevel;
    protected $_name = [
        'configGroupId' => 'ConfigGroupId',
        'cveCount' => 'CveCount',
        'cves' => 'Cves',
        'desktopId' => 'DesktopId',
        'disabled' => 'Disabled',
        'firstFoundTime' => 'FirstFoundTime',
        'fixRecords' => 'FixRecords',
        'patchIds' => 'PatchIds',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'status' => 'Status',
        'vulLevel' => 'VulLevel',
    ];

    public function validate()
    {
        if (\is_array($this->cves)) {
            Model::validateArray($this->cves);
        }
        if (\is_array($this->fixRecords)) {
            Model::validateArray($this->fixRecords);
        }
        if (\is_array($this->patchIds)) {
            Model::validateArray($this->patchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configGroupId) {
            $res['ConfigGroupId'] = $this->configGroupId;
        }

        if (null !== $this->cveCount) {
            $res['CveCount'] = $this->cveCount;
        }

        if (null !== $this->cves) {
            if (\is_array($this->cves)) {
                $res['Cves'] = [];
                $n1 = 0;
                foreach ($this->cves as $item1) {
                    $res['Cves'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopId) {
            $res['DesktopId'] = $this->desktopId;
        }

        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }

        if (null !== $this->firstFoundTime) {
            $res['FirstFoundTime'] = $this->firstFoundTime;
        }

        if (null !== $this->fixRecords) {
            if (\is_array($this->fixRecords)) {
                $res['FixRecords'] = [];
                $n1 = 0;
                foreach ($this->fixRecords as $item1) {
                    $res['FixRecords'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->patchIds) {
            if (\is_array($this->patchIds)) {
                $res['PatchIds'] = [];
                $n1 = 0;
                foreach ($this->patchIds as $item1) {
                    $res['PatchIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->vulLevel) {
            $res['VulLevel'] = $this->vulLevel;
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
        if (isset($map['ConfigGroupId'])) {
            $model->configGroupId = $map['ConfigGroupId'];
        }

        if (isset($map['CveCount'])) {
            $model->cveCount = $map['CveCount'];
        }

        if (isset($map['Cves'])) {
            if (!empty($map['Cves'])) {
                $model->cves = [];
                $n1 = 0;
                foreach ($map['Cves'] as $item1) {
                    $model->cves[$n1] = cves::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopId'])) {
            $model->desktopId = $map['DesktopId'];
        }

        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }

        if (isset($map['FirstFoundTime'])) {
            $model->firstFoundTime = $map['FirstFoundTime'];
        }

        if (isset($map['FixRecords'])) {
            if (!empty($map['FixRecords'])) {
                $model->fixRecords = [];
                $n1 = 0;
                foreach ($map['FixRecords'] as $item1) {
                    $model->fixRecords[$n1] = fixRecords::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PatchIds'])) {
            if (!empty($map['PatchIds'])) {
                $model->patchIds = [];
                $n1 = 0;
                foreach ($map['PatchIds'] as $item1) {
                    $model->patchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['VulLevel'])) {
            $model->vulLevel = $map['VulLevel'];
        }

        return $model;
    }
}
