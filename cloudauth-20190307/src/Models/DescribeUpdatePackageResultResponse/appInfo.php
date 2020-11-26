<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponse;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponse\appInfo\debugPackageInfo;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeUpdatePackageResultResponse\appInfo\packageInfo;
use AlibabaCloud\Tea\Model;

class appInfo extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $startDate;

    /**
     * @var string
     */
    public $endDate;

    /**
     * @var int
     */
    public $type;

    /**
     * @var packageInfo
     */
    public $packageInfo;

    /**
     * @var debugPackageInfo
     */
    public $debugPackageInfo;
    protected $_name = [
        'id'               => 'Id',
        'name'             => 'Name',
        'packageName'      => 'PackageName',
        'icon'             => 'Icon',
        'startDate'        => 'StartDate',
        'endDate'          => 'EndDate',
        'type'             => 'Type',
        'packageInfo'      => 'PackageInfo',
        'debugPackageInfo' => 'DebugPackageInfo',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('packageName', $this->packageName, true);
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('packageInfo', $this->packageInfo, true);
        Model::validateRequired('debugPackageInfo', $this->debugPackageInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->packageInfo) {
            $res['PackageInfo'] = null !== $this->packageInfo ? $this->packageInfo->toMap() : null;
        }
        if (null !== $this->debugPackageInfo) {
            $res['DebugPackageInfo'] = null !== $this->debugPackageInfo ? $this->debugPackageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['PackageInfo'])) {
            $model->packageInfo = packageInfo::fromMap($map['PackageInfo']);
        }
        if (isset($map['DebugPackageInfo'])) {
            $model->debugPackageInfo = debugPackageInfo::fromMap($map['DebugPackageInfo']);
        }

        return $model;
    }
}
