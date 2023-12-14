<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class GetInstancesRequest extends Model
{
    /**
     * @example APP_PBxxx
     *
     * @var string
     */
    public $appType;

    /**
     * @example agree
     *
     * @var string
     */
    public $approvedResult;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $createFromTimeGMT;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $createToTimeGMT;

    /**
     * @example FORM-EF6Yxxx
     *
     * @var string
     */
    public $formUuid;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example zh_CN
     *
     * @var string
     */
    public $language;

    /**
     * @example 2021-05-01
     *
     * @var string
     */
    public $modifiedFromTimeGMT;

    /**
     * @example 2021-09-10
     *
     * @var string
     */
    public $modifiedToTimeGMT;

    /**
     * @example {}
     *
     * @var string
     */
    public $orderConfigJson;

    /**
     * @example 012345
     *
     * @var string
     */
    public $originatorId;

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
     * @example {\"textField\":\"123\"}
     *
     * @var string
     */
    public $searchFieldJson;

    /**
     * @example hexxyy
     *
     * @var string
     */
    public $systemToken;

    /**
     * @example 1045001
     *
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
        'orderConfigJson'     => 'OrderConfigJson',
        'originatorId'        => 'OriginatorId',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'searchFieldJson'     => 'SearchFieldJson',
        'systemToken'         => 'SystemToken',
        'taskId'              => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->orderConfigJson) {
            $res['OrderConfigJson'] = $this->orderConfigJson;
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

    /**
     * @param array $map
     *
     * @return GetInstancesRequest
     */
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
        if (isset($map['OrderConfigJson'])) {
            $model->orderConfigJson = $map['OrderConfigJson'];
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
