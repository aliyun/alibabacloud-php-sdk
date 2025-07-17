<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListCertificatesRequest extends Model
{
    /**
     * @description The ID of the user who created the certificate files.
     *
     * @example 1107550004253538
     *
     * @var string
     */
    public $createUser;

    /**
     * @description The time when the certificate file was created. You can call this operation to query the files that are created before the time. Unit: milliseconds.
     *
     * @example 1593877765000
     *
     * @var int
     */
    public $endCreateTime;

    /**
     * @description The name of the certificate file. Fuzzy match by file name is supported.
     *
     * @example xm_create_test
     *
     * @var string
     */
    public $name;

    /**
     * @description The order in which you want to sort the certificate files. Valid values: Desc: descending order ASC: ascending order Default value: Asc
     *
     * @example Asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the workspace to which the certificate file belongs.
     *
     * This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The field used to sort the certificate files. Valid values: CreateTime Id Name Default value: Id
     *
     * @example Id
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The time when the certificate file was created. You can call this operation to query the files that are created after the time. Unit: milliseconds.
     *
     * @example 1730217600000
     *
     * @var int
     */
    public $startCreateTime;
    protected $_name = [
        'createUser' => 'CreateUser',
        'endCreateTime' => 'EndCreateTime',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'sortBy' => 'SortBy',
        'startCreateTime' => 'StartCreateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createUser) {
            $res['CreateUser'] = $this->createUser;
        }
        if (null !== $this->endCreateTime) {
            $res['EndCreateTime'] = $this->endCreateTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startCreateTime) {
            $res['StartCreateTime'] = $this->startCreateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCertificatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateUser'])) {
            $model->createUser = $map['CreateUser'];
        }
        if (isset($map['EndCreateTime'])) {
            $model->endCreateTime = $map['EndCreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartCreateTime'])) {
            $model->startCreateTime = $map['StartCreateTime'];
        }

        return $model;
    }
}
