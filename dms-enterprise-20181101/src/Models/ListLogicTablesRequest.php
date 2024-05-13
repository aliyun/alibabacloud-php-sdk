<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class ListLogicTablesRequest extends Model
{
    /**
     * @description The ID of the logical database.
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $databaseId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Specifies whether to return the GUID of the table.
     *
     * @example true
     *
     * @var bool
     */
    public $returnGuid;

    /**
     * @description The keyword that is used to search for the logical tables. Prefix match is supported.
     *
     * @example test
     *
     * @var string
     */
    public $searchName;

    /**
     * @description The ID of the tenant.
     *
     * > To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     * @example -1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'databaseId' => 'DatabaseId',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'returnGuid' => 'ReturnGuid',
        'searchName' => 'SearchName',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->databaseId) {
            $res['DatabaseId'] = $this->databaseId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->returnGuid) {
            $res['ReturnGuid'] = $this->returnGuid;
        }
        if (null !== $this->searchName) {
            $res['SearchName'] = $this->searchName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogicTablesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DatabaseId'])) {
            $model->databaseId = $map['DatabaseId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ReturnGuid'])) {
            $model->returnGuid = $map['ReturnGuid'];
        }
        if (isset($map['SearchName'])) {
            $model->searchName = $map['SearchName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
