<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarRecordsRequest extends Model
{
    /**
     * @description The end time of the task execution, in 13-digit timestamp format.
     *
     * @example 1683772744953
     *
     * @var int
     */
    public $endMillis;

    /**
     * @description Set the language type for requests and received messages. The default is **zh**. Values:
     * - **zh**: Chinese
     * - **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description Set which page to start displaying the query results from. The default value is 1, indicating the first page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Specify the maximum number of data entries per page when performing a paginated query. The default number of entries per page is 20. If the PageSize parameter is empty, it will return 10 entries by default.
     * > It is recommended not to leave the PageSize value empty.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The UUID of the playbook.
     * > You can obtain this parameter by calling the [DescribePlaybooks](~~DescribePlaybooks~~) interface.
     *
     * This parameter is required.
     *
     * @example 8f55e76d-b5d5-4720-9cd7-xxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description UUID of the playbook task execution.
     * > You can obtain this parameter by calling the [DescribeSoarRecords](https://help.aliyun.com/document_detail/2627455.html) interface.
     *
     * @example 6d412cfa-0905-4567-8a83-xxxxxx
     *
     * @var string
     */
    public $requestUuid;

    /**
     * @description The start time of the task execution, in 13-digit timestamp format.
     *
     * @example 1683526284584
     *
     * @var int
     */
    public $startMillis;

    /**
     * @description The status of the task execution. Values:
     *
     * - **success**: Successful task.
     * - **failed**: Failed task.
     * - **inprogress**: Task in progress
     *
     * @example inprogress
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The MD5 value of the playbook configuration.
     *
     * @example be0a4ef084dd174abe478df52xxxxx
     *
     * @var string
     */
    public $taskflowMd5;

    /**
     * @description The Alibaba Cloud account ID that executed the playbook task.
     *
     * @example 127xxxx4392
     *
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'endMillis' => 'EndMillis',
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'playbookUuid' => 'PlaybookUuid',
        'requestUuid' => 'RequestUuid',
        'startMillis' => 'StartMillis',
        'taskStatus' => 'TaskStatus',
        'taskflowMd5' => 'TaskflowMd5',
        'triggerUser' => 'TriggerUser',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endMillis) {
            $res['EndMillis'] = $this->endMillis;
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
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->requestUuid) {
            $res['RequestUuid'] = $this->requestUuid;
        }
        if (null !== $this->startMillis) {
            $res['StartMillis'] = $this->startMillis;
        }
        if (null !== $this->taskStatus) {
            $res['TaskStatus'] = $this->taskStatus;
        }
        if (null !== $this->taskflowMd5) {
            $res['TaskflowMd5'] = $this->taskflowMd5;
        }
        if (null !== $this->triggerUser) {
            $res['TriggerUser'] = $this->triggerUser;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSoarRecordsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndMillis'])) {
            $model->endMillis = $map['EndMillis'];
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
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['RequestUuid'])) {
            $model->requestUuid = $map['RequestUuid'];
        }
        if (isset($map['StartMillis'])) {
            $model->startMillis = $map['StartMillis'];
        }
        if (isset($map['TaskStatus'])) {
            $model->taskStatus = $map['TaskStatus'];
        }
        if (isset($map['TaskflowMd5'])) {
            $model->taskflowMd5 = $map['TaskflowMd5'];
        }
        if (isset($map['TriggerUser'])) {
            $model->triggerUser = $map['TriggerUser'];
        }

        return $model;
    }
}
