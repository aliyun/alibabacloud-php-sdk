<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponseBody\appInfoList\debugPackageInfo;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeAppInfoResponseBody\appInfoList\packageInfo;
use AlibabaCloud\Tea\Model;

class appInfoList extends Model
{
    /**
     * @var debugPackageInfo
     */
    public $debugPackageInfo;

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
     * @var packageInfo
     */
    public $packageInfo;

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
    protected $_name = [
        'debugPackageInfo' => 'DebugPackageInfo',
        'endDate'          => 'EndDate',
        'icon'             => 'Icon',
        'id'               => 'Id',
        'name'             => 'Name',
        'packageInfo'      => 'PackageInfo',
        'packageName'      => 'PackageName',
        'startDate'        => 'StartDate',
        'type'             => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugPackageInfo) {
            $res['DebugPackageInfo'] = null !== $this->debugPackageInfo ? $this->debugPackageInfo->toMap() : null;
        }
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
        if (null !== $this->packageInfo) {
            $res['PackageInfo'] = null !== $this->packageInfo ? $this->packageInfo->toMap() : null;
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
        if (isset($map['DebugPackageInfo'])) {
            $model->debugPackageInfo = debugPackageInfo::fromMap($map['DebugPackageInfo']);
        }
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
        if (isset($map['PackageInfo'])) {
            $model->packageInfo = packageInfo::fromMap($map['PackageInfo']);
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

        return $model;
    }
}
