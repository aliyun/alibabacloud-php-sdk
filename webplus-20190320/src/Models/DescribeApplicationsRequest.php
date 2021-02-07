<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeApplicationsRequest extends Model
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
    public $appName;

    /**
     * @var string
     */
    public $appSearch;

    /**
     * @var string
     */
    public $envSearch;

    /**
     * @var string
     */
    public $stackSearch;

    /**
     * @var string
     */
    public $categorySearch;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'appId'          => 'AppId',
        'pageSize'       => 'PageSize',
        'pageNumber'     => 'PageNumber',
        'appName'        => 'AppName',
        'appSearch'      => 'AppSearch',
        'envSearch'      => 'EnvSearch',
        'stackSearch'    => 'StackSearch',
        'categorySearch' => 'CategorySearch',
        'regionId'       => 'RegionId',
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
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appSearch) {
            $res['AppSearch'] = $this->appSearch;
        }
        if (null !== $this->envSearch) {
            $res['EnvSearch'] = $this->envSearch;
        }
        if (null !== $this->stackSearch) {
            $res['StackSearch'] = $this->stackSearch;
        }
        if (null !== $this->categorySearch) {
            $res['CategorySearch'] = $this->categorySearch;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApplicationsRequest
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppSearch'])) {
            $model->appSearch = $map['AppSearch'];
        }
        if (isset($map['EnvSearch'])) {
            $model->envSearch = $map['EnvSearch'];
        }
        if (isset($map['StackSearch'])) {
            $model->stackSearch = $map['StackSearch'];
        }
        if (isset($map['CategorySearch'])) {
            $model->categorySearch = $map['CategorySearch'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
