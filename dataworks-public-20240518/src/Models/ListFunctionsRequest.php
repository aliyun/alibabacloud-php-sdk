<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListFunctionsRequest extends Model
{
    /**
     * @description The ID of the owner of the UDF. This parameter specifies a filter condition.
     *
     * @example 110755000425XXXX
     *
     * @var string
     */
    public $owner;

    /**
     * @description The page number. Default value: 1. Minimum value: 1.
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
     * @description The DataWorks workspace ID. You can log on to the [DataWorks console](https://workbench.data.aliyun.com/console) and go to the Workspace page to query the ID.
     *
     * This parameter is required.
     * @example 12345
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The UDF type. This parameter specifies a filter condition.
     *
     * Valid values:
     *
     *   MATH: mathematical operation function
     *   AGGREGATE: aggregate function
     *   STRING: string processing function
     *   DATE: date function
     *   ANALYTIC: window function
     *   OTHER: others
     *
     * @example MATH
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'owner'      => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'projectId'  => 'ProjectId',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFunctionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
