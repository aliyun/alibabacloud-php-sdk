<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Tea\Model;

class DescribeZonesRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $searchMode;

    /**
     * @var string
     */
    public $queryRegionId;

    /**
     * @var string
     */
    public $queryVpcId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $zoneType;

    /**
     * @var string[]
     */
    public $zoneTag;
    protected $_name = [
        'lang'            => 'Lang',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'keyword'         => 'Keyword',
        'userClientIp'    => 'UserClientIp',
        'searchMode'      => 'SearchMode',
        'queryRegionId'   => 'QueryRegionId',
        'queryVpcId'      => 'QueryVpcId',
        'resourceGroupId' => 'ResourceGroupId',
        'orderBy'         => 'OrderBy',
        'direction'       => 'Direction',
        'zoneType'        => 'ZoneType',
        'zoneTag'         => 'ZoneTag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }
        if (null !== $this->queryRegionId) {
            $res['QueryRegionId'] = $this->queryRegionId;
        }
        if (null !== $this->queryVpcId) {
            $res['QueryVpcId'] = $this->queryVpcId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
        }
        if (null !== $this->zoneTag) {
            $res['ZoneTag'] = $this->zoneTag;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeZonesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }
        if (isset($map['QueryRegionId'])) {
            $model->queryRegionId = $map['QueryRegionId'];
        }
        if (isset($map['QueryVpcId'])) {
            $model->queryVpcId = $map['QueryVpcId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }
        if (isset($map['ZoneTag'])) {
            if (!empty($map['ZoneTag'])) {
                $model->zoneTag = $map['ZoneTag'];
            }
        }

        return $model;
    }
}
