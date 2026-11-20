<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeResourceStatisticByRegionResponseBody\statistic;

use AlibabaCloud\Dara\Model;

class regionStatistics extends Model
{
    /**
     * @var int
     */
    public $assignedEndUserCount;

    /**
     * @var int
     */
    public $connectedEndUserCount;

    /**
     * @var int
     */
    public $desktopCount;

    /**
     * @var int
     */
    public $desktopGroupCount;

    /**
     * @var int
     */
    public $networkPackageCount;

    /**
     * @var int
     */
    public $policyGroupCount;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'assignedEndUserCount' => 'AssignedEndUserCount',
        'connectedEndUserCount' => 'ConnectedEndUserCount',
        'desktopCount' => 'DesktopCount',
        'desktopGroupCount' => 'DesktopGroupCount',
        'networkPackageCount' => 'NetworkPackageCount',
        'policyGroupCount' => 'PolicyGroupCount',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedEndUserCount) {
            $res['AssignedEndUserCount'] = $this->assignedEndUserCount;
        }

        if (null !== $this->connectedEndUserCount) {
            $res['ConnectedEndUserCount'] = $this->connectedEndUserCount;
        }

        if (null !== $this->desktopCount) {
            $res['DesktopCount'] = $this->desktopCount;
        }

        if (null !== $this->desktopGroupCount) {
            $res['DesktopGroupCount'] = $this->desktopGroupCount;
        }

        if (null !== $this->networkPackageCount) {
            $res['NetworkPackageCount'] = $this->networkPackageCount;
        }

        if (null !== $this->policyGroupCount) {
            $res['PolicyGroupCount'] = $this->policyGroupCount;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['AssignedEndUserCount'])) {
            $model->assignedEndUserCount = $map['AssignedEndUserCount'];
        }

        if (isset($map['ConnectedEndUserCount'])) {
            $model->connectedEndUserCount = $map['ConnectedEndUserCount'];
        }

        if (isset($map['DesktopCount'])) {
            $model->desktopCount = $map['DesktopCount'];
        }

        if (isset($map['DesktopGroupCount'])) {
            $model->desktopGroupCount = $map['DesktopGroupCount'];
        }

        if (isset($map['NetworkPackageCount'])) {
            $model->networkPackageCount = $map['NetworkPackageCount'];
        }

        if (isset($map['PolicyGroupCount'])) {
            $model->policyGroupCount = $map['PolicyGroupCount'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
