<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ListInterceptionHistoryRequest extends Model
{
    /**
     * @description The ID of the container cluster.
     *
     * @example c7c190a82d9a048be9038d352840f****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp.
     *
     * @example 1635575219000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The name of the alert.
     *
     * @example Abnormal access
     *
     * @var string
     */
    public $historyName;

    /**
     * @description The types of exceptions.
     *
     * @var int[]
     */
    public $interceptionTypes;

    /**
     * @description 设置请求和接收消息的语言类型。默认值**zh**。取值：
     *
     *
     * - **zh**：中文
     * - **en**：英文
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The start of the time range to query. The value is a UNIX timestamp.
     *
     * @example 1651290987000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId'         => 'ClusterId',
        'currentPage'       => 'CurrentPage',
        'endTime'           => 'EndTime',
        'historyName'       => 'HistoryName',
        'interceptionTypes' => 'InterceptionTypes',
        'lang'              => 'Lang',
        'pageSize'          => 'PageSize',
        'startTime'         => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->historyName) {
            $res['HistoryName'] = $this->historyName;
        }
        if (null !== $this->interceptionTypes) {
            $res['InterceptionTypes'] = $this->interceptionTypes;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInterceptionHistoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HistoryName'])) {
            $model->historyName = $map['HistoryName'];
        }
        if (isset($map['InterceptionTypes'])) {
            if (!empty($map['InterceptionTypes'])) {
                $model->interceptionTypes = $map['InterceptionTypes'];
            }
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
