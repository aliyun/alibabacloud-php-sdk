<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetPageByCondAppInfoRequest extends Model
{
    /**
     * @var string
     */
    public $appItemId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $appType;

    /**
     * @var string
     */
    public $businessType;

    /**
     * @var bool
     */
    public $needTotalCount;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pkgName;

    /**
     * @var string
     */
    public $pkgSignature;

    /**
     * @var int
     */
    public $platformType;

    /**
     * @var string
     */
    public $sortBy;
    protected $_name = [
        'appItemId' => 'AppItemId',
        'appName' => 'AppName',
        'appType' => 'AppType',
        'businessType' => 'BusinessType',
        'needTotalCount' => 'NeedTotalCount',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'pkgName' => 'PkgName',
        'pkgSignature' => 'PkgSignature',
        'platformType' => 'PlatformType',
        'sortBy' => 'SortBy',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appItemId) {
            $res['AppItemId'] = $this->appItemId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->businessType) {
            $res['BusinessType'] = $this->businessType;
        }

        if (null !== $this->needTotalCount) {
            $res['NeedTotalCount'] = $this->needTotalCount;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pkgName) {
            $res['PkgName'] = $this->pkgName;
        }

        if (null !== $this->pkgSignature) {
            $res['PkgSignature'] = $this->pkgSignature;
        }

        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }

        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
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
        if (isset($map['AppItemId'])) {
            $model->appItemId = $map['AppItemId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['BusinessType'])) {
            $model->businessType = $map['BusinessType'];
        }

        if (isset($map['NeedTotalCount'])) {
            $model->needTotalCount = $map['NeedTotalCount'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PkgName'])) {
            $model->pkgName = $map['PkgName'];
        }

        if (isset($map['PkgSignature'])) {
            $model->pkgSignature = $map['PkgSignature'];
        }

        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }

        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }

        return $model;
    }
}
