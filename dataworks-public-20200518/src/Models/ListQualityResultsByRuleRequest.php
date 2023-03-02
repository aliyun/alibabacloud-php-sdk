<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class ListQualityResultsByRuleRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * This parameter is used together with the StartDate parameter. The interval between the time specified by this parameter and the time specified by the StartDate parameter cannot exceed 7 days.
     * @example 2020-09-22 00:00:00
     *
     * @var string
     */
    public $endDate;

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
     * @description The name of the compute engine instance or data source for which data quality is monitored.
     *
     * @example autotest
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The ID of the monitoring rule. You can use the ID and information such as a partition filter expression to perform a joint query.
     *
     * @example 152322134
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-dd HH:mm:ss format.
     *
     * This parameter is used together with the EndDate parameter. The interval between the time specified by this parameter and the time specified by the EndDate parameter cannot exceed 7 days.
     * @example 2020-09-20 00:00:00
     *
     * @var string
     */
    public $startDate;
    protected $_name = [
        'endDate'     => 'EndDate',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'projectName' => 'ProjectName',
        'ruleId'      => 'RuleId',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQualityResultsByRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }

        return $model;
    }
}
