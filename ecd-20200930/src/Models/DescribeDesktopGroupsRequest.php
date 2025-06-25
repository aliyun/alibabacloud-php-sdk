<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeDesktopGroupsRequest\tag;

class DescribeDesktopGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $bundleId;

    /**
     * @var string
     */
    public $desktopGroupId;

    /**
     * @var string[]
     */
    public $desktopGroupIds;

    /**
     * @var string
     */
    public $desktopGroupName;

    /**
     * @var string[]
     */
    public $endUserIds;

    /**
     * @var string[]
     */
    public $excludedEndUserIds;

    /**
     * @var string[]
     */
    public $imageId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var bool
     */
    public $multiResource;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var int
     */
    public $ownType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $policyGroupId;

    /**
     * @var string
     */
    public $protocolType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'bundleId' => 'BundleId',
        'desktopGroupId' => 'DesktopGroupId',
        'desktopGroupIds' => 'DesktopGroupIds',
        'desktopGroupName' => 'DesktopGroupName',
        'endUserIds' => 'EndUserIds',
        'excludedEndUserIds' => 'ExcludedEndUserIds',
        'imageId' => 'ImageId',
        'maxResults' => 'MaxResults',
        'multiResource' => 'MultiResource',
        'nextToken' => 'NextToken',
        'officeSiteId' => 'OfficeSiteId',
        'ownType' => 'OwnType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'policyGroupId' => 'PolicyGroupId',
        'protocolType' => 'ProtocolType',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->bundleId)) {
            Model::validateArray($this->bundleId);
        }
        if (\is_array($this->desktopGroupIds)) {
            Model::validateArray($this->desktopGroupIds);
        }
        if (\is_array($this->endUserIds)) {
            Model::validateArray($this->endUserIds);
        }
        if (\is_array($this->excludedEndUserIds)) {
            Model::validateArray($this->excludedEndUserIds);
        }
        if (\is_array($this->imageId)) {
            Model::validateArray($this->imageId);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bundleId) {
            if (\is_array($this->bundleId)) {
                $res['BundleId'] = [];
                $n1 = 0;
                foreach ($this->bundleId as $item1) {
                    $res['BundleId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopGroupId) {
            $res['DesktopGroupId'] = $this->desktopGroupId;
        }

        if (null !== $this->desktopGroupIds) {
            if (\is_array($this->desktopGroupIds)) {
                $res['DesktopGroupIds'] = [];
                $n1 = 0;
                foreach ($this->desktopGroupIds as $item1) {
                    $res['DesktopGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->desktopGroupName) {
            $res['DesktopGroupName'] = $this->desktopGroupName;
        }

        if (null !== $this->endUserIds) {
            if (\is_array($this->endUserIds)) {
                $res['EndUserIds'] = [];
                $n1 = 0;
                foreach ($this->endUserIds as $item1) {
                    $res['EndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->excludedEndUserIds) {
            if (\is_array($this->excludedEndUserIds)) {
                $res['ExcludedEndUserIds'] = [];
                $n1 = 0;
                foreach ($this->excludedEndUserIds as $item1) {
                    $res['ExcludedEndUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->imageId) {
            if (\is_array($this->imageId)) {
                $res['ImageId'] = [];
                $n1 = 0;
                foreach ($this->imageId as $item1) {
                    $res['ImageId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->multiResource) {
            $res['MultiResource'] = $this->multiResource;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->ownType) {
            $res['OwnType'] = $this->ownType;
        }

        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }

        if (null !== $this->policyGroupId) {
            $res['PolicyGroupId'] = $this->policyGroupId;
        }

        if (null !== $this->protocolType) {
            $res['ProtocolType'] = $this->protocolType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BundleId'])) {
            if (!empty($map['BundleId'])) {
                $model->bundleId = [];
                $n1 = 0;
                foreach ($map['BundleId'] as $item1) {
                    $model->bundleId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopGroupId'])) {
            $model->desktopGroupId = $map['DesktopGroupId'];
        }

        if (isset($map['DesktopGroupIds'])) {
            if (!empty($map['DesktopGroupIds'])) {
                $model->desktopGroupIds = [];
                $n1 = 0;
                foreach ($map['DesktopGroupIds'] as $item1) {
                    $model->desktopGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DesktopGroupName'])) {
            $model->desktopGroupName = $map['DesktopGroupName'];
        }

        if (isset($map['EndUserIds'])) {
            if (!empty($map['EndUserIds'])) {
                $model->endUserIds = [];
                $n1 = 0;
                foreach ($map['EndUserIds'] as $item1) {
                    $model->endUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ExcludedEndUserIds'])) {
            if (!empty($map['ExcludedEndUserIds'])) {
                $model->excludedEndUserIds = [];
                $n1 = 0;
                foreach ($map['ExcludedEndUserIds'] as $item1) {
                    $model->excludedEndUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = [];
                $n1 = 0;
                foreach ($map['ImageId'] as $item1) {
                    $model->imageId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['MultiResource'])) {
            $model->multiResource = $map['MultiResource'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['OwnType'])) {
            $model->ownType = $map['OwnType'];
        }

        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }

        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }

        if (isset($map['PolicyGroupId'])) {
            $model->policyGroupId = $map['PolicyGroupId'];
        }

        if (isset($map['ProtocolType'])) {
            $model->protocolType = $map['ProtocolType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
