<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarRecordsRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a 13-digit timestamp.
     *
     * @example 1683772744953
     *
     * @var int
     */
    public $endMillis;

    /**
     * @description The language of the content within the request and response. Default value: **zh**. Valid values:
     *
     *   **zh**: Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description The page number. Default value: 1. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10. If you do not specify the PageSize parameter, 10 entries are returned by default.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The playbook UUID.
     *
     * This parameter is required.
     * @example 8f55e76d-b5d5-4720-9cd7-xxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The beginning of the time range to query. The value is a 13-byte timestamp.
     *
     * @example 1683526284584
     *
     * @var int
     */
    public $startMillis;

    /**
     * @description The status of the task. Valid values:
     *
     *   **success**
     *   **failed**
     *   **inprogress**
     *
     * @example inprogress
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @description The MD5 value of the playbook.
     *
     * @example be0a4ef084dd174abe478df52xxxxx
     *
     * @var string
     */
    public $taskflowMd5;

    /**
     * @description The ID of the Alibaba Cloud account that is used to execute the task.
     *
     * @example 127xxxx4392
     *
     * @var string
     */
    public $triggerUser;
    protected $_name = [
        'endMillis'    => 'EndMillis',
        'lang'         => 'Lang',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'playbookUuid' => 'PlaybookUuid',
        'startMillis'  => 'StartMillis',
        'taskStatus'   => 'TaskStatus',
        'taskflowMd5'  => 'TaskflowMd5',
        'triggerUser'  => 'TriggerUser',
    ];

    public function validate()
    {
    }

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
