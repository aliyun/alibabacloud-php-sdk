<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeSoarRecordsRequest extends Model
{
    /**
     * @example 1683772744953
     *
     * @var int
     */
    public $endMillis;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 8f55e76d-b5d5-4720-9cd7-xxxxx
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example 1683526284584
     *
     * @var int
     */
    public $startMillis;

    /**
     * @example inprogress
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @example be0a4ef084dd174abe478df52xxxxx
     *
     * @var string
     */
    public $taskflowMd5;

    /**
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
