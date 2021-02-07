<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribePkgVersionsRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $pkgVersionLabel;

    /**
     * @var string
     */
    public $pkgVersionSearch;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appId'            => 'AppId',
        'pageSize'         => 'PageSize',
        'pageNumber'       => 'PageNumber',
        'pkgVersionLabel'  => 'PkgVersionLabel',
        'pkgVersionSearch' => 'PkgVersionSearch',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pkgVersionLabel) {
            $res['PkgVersionLabel'] = $this->pkgVersionLabel;
        }
        if (null !== $this->pkgVersionSearch) {
            $res['PkgVersionSearch'] = $this->pkgVersionSearch;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePkgVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PkgVersionLabel'])) {
            $model->pkgVersionLabel = $map['PkgVersionLabel'];
        }
        if (isset($map['PkgVersionSearch'])) {
            $model->pkgVersionSearch = $map['PkgVersionSearch'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
