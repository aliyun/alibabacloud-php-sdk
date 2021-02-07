<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models;

use AlibabaCloud\Tea\Model;

class DescribeAppEnvsRequest extends Model
{
    /**
     * @var string
     */
    public $envId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var bool
     */
    public $includeTerminated;

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
    public $envName;

    /**
     * @var string
     */
    public $envSearch;

    /**
     * @var bool
     */
    public $recentUpdated;

    /**
     * @var string
     */
    public $stackSearch;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'envId'             => 'EnvId',
        'appId'             => 'AppId',
        'includeTerminated' => 'IncludeTerminated',
        'pageSize'          => 'PageSize',
        'pageNumber'        => 'PageNumber',
        'envName'           => 'EnvName',
        'envSearch'         => 'EnvSearch',
        'recentUpdated'     => 'RecentUpdated',
        'stackSearch'       => 'StackSearch',
        'regionId'          => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->envId) {
            $res['EnvId'] = $this->envId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->includeTerminated) {
            $res['IncludeTerminated'] = $this->includeTerminated;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->envSearch) {
            $res['EnvSearch'] = $this->envSearch;
        }
        if (null !== $this->recentUpdated) {
            $res['RecentUpdated'] = $this->recentUpdated;
        }
        if (null !== $this->stackSearch) {
            $res['StackSearch'] = $this->stackSearch;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAppEnvsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnvId'])) {
            $model->envId = $map['EnvId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['IncludeTerminated'])) {
            $model->includeTerminated = $map['IncludeTerminated'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['EnvSearch'])) {
            $model->envSearch = $map['EnvSearch'];
        }
        if (isset($map['RecentUpdated'])) {
            $model->recentUpdated = $map['RecentUpdated'];
        }
        if (isset($map['StackSearch'])) {
            $model->stackSearch = $map['StackSearch'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
