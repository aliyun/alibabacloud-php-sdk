<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListTaskOperationLogsRequest extends Model
{
    /**
     * @description The operation date, accurate to the day. The default value is the current day. You can query only the operation logs generated within the previous 31 days.
     *
     * @example 1710239005403
     *
     * @var int
     */
    public $date;

    /**
     * @description The task ID.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The environment of the workspace.
     *
     * Valid values:
     *
     *   Prod: production environment
     *   Dev: development environment
     *
     * @example Prod
     *
     * @var string
     */
    public $projectEnv;
    protected $_name = [
        'date'       => 'Date',
        'id'         => 'Id',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'projectEnv' => 'ProjectEnv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTaskOperationLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }

        return $model;
    }
}
