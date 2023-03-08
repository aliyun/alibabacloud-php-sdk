<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListQualityResultsByEntityRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-09-21 00:00:00
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The ID of the partition filter expression. You can call the [GetQualityEntity](~~174003~~) operation to query the ID of the partition filter expression.
     *
     * @example 152322134
     *
     * @var int
     */
    public $entityId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the compute engine instance or data source. You can obtain the name from data source configurations.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * @example 2020-09-20 00:00:00
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'     => 'EndDate',
        'entityId'    => 'EntityId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'projectId'   => 'ProjectId',
        'projectName' => 'ProjectName',
        'startDate'   => 'StartDate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQualityResultsByEntityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
