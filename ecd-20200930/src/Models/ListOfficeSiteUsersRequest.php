<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ListOfficeSiteUsersRequest extends Model
{
    /**
     * @var string
     */
    public $assignedInfo;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var bool
     */
    public $includeAssignedUser;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $OUPath;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sortType;
    protected $_name = [
        'assignedInfo' => 'AssignedInfo',
        'filter' => 'Filter',
        'includeAssignedUser' => 'IncludeAssignedUser',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'OUPath' => 'OUPath',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
        'sortType' => 'SortType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assignedInfo) {
            $res['AssignedInfo'] = $this->assignedInfo;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->includeAssignedUser) {
            $res['IncludeAssignedUser'] = $this->includeAssignedUser;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->OUPath) {
            $res['OUPath'] = $this->OUPath;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sortType) {
            $res['SortType'] = $this->sortType;
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
        if (isset($map['AssignedInfo'])) {
            $model->assignedInfo = $map['AssignedInfo'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['IncludeAssignedUser'])) {
            $model->includeAssignedUser = $map['IncludeAssignedUser'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OUPath'])) {
            $model->OUPath = $map['OUPath'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SortType'])) {
            $model->sortType = $map['SortType'];
        }

        return $model;
    }
}
