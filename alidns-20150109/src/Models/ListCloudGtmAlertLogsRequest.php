<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class ListCloudGtmAlertLogsRequest extends Model
{
    /**
     * @description Alert type:
     * - RESUME
     * @example ALERT
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The end time of the query (timestamp).
     *
     * This parameter is required.
     * @example 1711328826977
     *
     * @var int
     */
    public $endTimestamp;

    /**
     * @description Alarm object types:
     * - GTM_MONITOR_TEMPLATE: Health Check Template
     * @example GTM_ADDRESS
     *
     * @var string
     */
    public $entityType;

    /**
     * @description Search keyword, usually an address ID, address pool ID, domain information, etc.
     *
     * @example pool-895280232254422016
     *
     * @var string
     */
    public $keyword;

    /**
     * @description Language type of the returned information:
     * - en-US: English
     * @example zh-CN
     *
     * @var string
     */
    public $lang;

    /**
     * @description Current page number, starting from **1**, default is **1**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of rows per page when paginating queries, with a maximum value of 100 and a default of 20.
     *
     * This parameter is required.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The start time of the query (timestamp).
     *
     * This parameter is required.
     * @example 1611328826977
     *
     * @var int
     */
    public $startTimestamp;
    protected $_name = [
        'actionType'     => 'ActionType',
        'endTimestamp'   => 'EndTimestamp',
        'entityType'     => 'EntityType',
        'keyword'        => 'Keyword',
        'lang'           => 'Lang',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'startTimestamp' => 'StartTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCloudGtmAlertLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
