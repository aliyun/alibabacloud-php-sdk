<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceIdListRequest extends Model
{
    /**
     * @var string
     */
    public $appType;
    /**
     * @var string
     */
    public $approvedResult;
    /**
     * @var string
     */
    public $createFromTimeGMT;
    /**
     * @var string
     */
    public $createToTimeGMT;
    /**
     * @var string
     */
    public $formUuid;
    /**
     * @var string
     */
    public $instanceStatus;
    /**
     * @var string
     */
    public $language;
    /**
     * @var string
     */
    public $modifiedFromTimeGMT;
    /**
     * @var string
     */
    public $modifiedToTimeGMT;
    /**
     * @var string
     */
    public $originatorId;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $searchFieldJson;
    /**
     * @var string
     */
    public $systemToken;
    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appType'             => 'AppType',
        'approvedResult'      => 'ApprovedResult',
        'createFromTimeGMT'   => 'CreateFromTimeGMT',
        'createToTimeGMT'     => 'CreateToTimeGMT',
        'formUuid'            => 'FormUuid',
        'instanceStatus'      => 'InstanceStatus',
        'language'            => 'Language',
        'modifiedFromTimeGMT' => 'ModifiedFromTimeGMT',
        'modifiedToTimeGMT'   => 'ModifiedToTimeGMT',
        'originatorId'        => 'OriginatorId',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'searchFieldJson'     => 'SearchFieldJson',
        'systemToken'         => 'SystemToken',
        'taskId'              => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->approvedResult) {
            $res['ApprovedResult'] = $this->approvedResult;
        }

        if (null !== $this->createFromTimeGMT) {
            $res['CreateFromTimeGMT'] = $this->createFromTimeGMT;
        }

        if (null !== $this->createToTimeGMT) {
            $res['CreateToTimeGMT'] = $this->createToTimeGMT;
        }

        if (null !== $this->formUuid) {
            $res['FormUuid'] = $this->formUuid;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->modifiedFromTimeGMT) {
            $res['ModifiedFromTimeGMT'] = $this->modifiedFromTimeGMT;
        }

        if (null !== $this->modifiedToTimeGMT) {
            $res['ModifiedToTimeGMT'] = $this->modifiedToTimeGMT;
        }

        if (null !== $this->originatorId) {
            $res['OriginatorId'] = $this->originatorId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->searchFieldJson) {
            $res['SearchFieldJson'] = $this->searchFieldJson;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['ApprovedResult'])) {
            $model->approvedResult = $map['ApprovedResult'];
        }

        if (isset($map['CreateFromTimeGMT'])) {
            $model->createFromTimeGMT = $map['CreateFromTimeGMT'];
        }

        if (isset($map['CreateToTimeGMT'])) {
            $model->createToTimeGMT = $map['CreateToTimeGMT'];
        }

        if (isset($map['FormUuid'])) {
            $model->formUuid = $map['FormUuid'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['ModifiedFromTimeGMT'])) {
            $model->modifiedFromTimeGMT = $map['ModifiedFromTimeGMT'];
        }

        if (isset($map['ModifiedToTimeGMT'])) {
            $model->modifiedToTimeGMT = $map['ModifiedToTimeGMT'];
        }

        if (isset($map['OriginatorId'])) {
            $model->originatorId = $map['OriginatorId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['SearchFieldJson'])) {
            $model->searchFieldJson = $map['SearchFieldJson'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
