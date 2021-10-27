<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponse;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponse\appInfoList\debugPackageInfo;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponse\appInfoList\packageInfo;
use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @var string
     */
    public $endDate;

    /**
     * @var string
     */
    public $icon;

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
    public $startDate;

    /**
     * @var int
     */
    public $type;

    /**
     * @var debugPackageInfo
     */
    public $debugPackageInfo;

    /**
     * @var packageInfo
     */
    public $packageInfo;
    protected $_name = [
        'endDate'          => 'EndDate',
        'icon'             => 'Icon',
        'id'               => 'Id',
        'name'             => 'Name',
        'packageName'      => 'PackageName',
        'startDate'        => 'StartDate',
        'type'             => 'Type',
        'debugPackageInfo' => 'DebugPackageInfo',
        'packageInfo'      => 'PackageInfo',
    ];

    public function validate()
    {
        Model::validateRequired('endDate', $this->endDate, true);
        Model::validateRequired('icon', $this->icon, true);
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('packageName', $this->packageName, true);
        Model::validateRequired('startDate', $this->startDate, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('debugPackageInfo', $this->debugPackageInfo, true);
        Model::validateRequired('packageInfo', $this->packageInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->debugPackageInfo) {
            $res['DebugPackageInfo'] = null !== $this->debugPackageInfo ? $this->debugPackageInfo->toMap() : null;
        }
        if (null !== $this->packageInfo) {
            $res['PackageInfo'] = null !== $this->packageInfo ? $this->packageInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return appInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['DebugPackageInfo'])) {
            $model->debugPackageInfo = debugPackageInfo::fromMap($map['DebugPackageInfo']);
        }
        if (isset($map['PackageInfo'])) {
            $model->packageInfo = packageInfo::fromMap($map['PackageInfo']);
        }

        return $model;
    }
}
