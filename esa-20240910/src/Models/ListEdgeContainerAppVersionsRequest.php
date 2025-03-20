<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListEdgeContainerAppVersionsRequest extends Model
{
    /**
     * @description The application ID, which can be obtained by calling the [ListEdgeContainerApps](~~ListEdgeContainerApps~~) operation.
     *
     * This parameter is required.
     *
     * @example app-88068867578379****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The sorting field. Valid values:
     *
     *   Name: the version name.
     *   CreateTime: the time when the version was created.
     *   UpdateTime: the time when the version was last modified.
     *
     * @example Name
     *
     * @var string
     */
    public $orderKey;

    /**
     * @description The order in which you want to sort the query results. Valid values:
     *
     *   ASC: in ascending order.
     *   DESC: in descending order.
     *
     * @example DESC
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The page number. Valid values: 1 to 65535.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The keyword used for the search.
     *
     * @example ver-100568263967926****
     *
     * @var string
     */
    public $searchKey;

    /**
     * @description The parameter used for fuzzy search. Valid values: VersionId and Name.
     *
     * @example VersionId
     *
     * @var string
     */
    public $searchType;
    protected $_name = [
        'appId' => 'AppId',
        'orderKey' => 'OrderKey',
        'orderType' => 'OrderType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'searchKey' => 'SearchKey',
        'searchType' => 'SearchType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->searchKey) {
            $res['SearchKey'] = $this->searchKey;
        }
        if (null !== $this->searchType) {
            $res['SearchType'] = $this->searchType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListEdgeContainerAppVersionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SearchKey'])) {
            $model->searchKey = $map['SearchKey'];
        }
        if (isset($map['SearchType'])) {
            $model->searchType = $map['SearchType'];
        }

        return $model;
    }
}
