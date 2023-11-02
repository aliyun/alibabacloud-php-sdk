<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListAutomateResponseConfigsRequest extends Model
{
    /**
     * @example doPlaybook
     *
     * @var string
     */
    public $actionType;

    /**
     * @example event
     *
     * @var string
     */
    public $autoResponseType;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example system_aliyun_aegis_kill_quara_book
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example cfw kill quara book
     *
     * @var string
     */
    public $ruleName;

    /**
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @example 17108579417****
     *
     * @var int
     */
    public $subUserId;
    protected $_name = [
        'actionType'       => 'ActionType',
        'autoResponseType' => 'AutoResponseType',
        'currentPage'      => 'CurrentPage',
        'id'               => 'Id',
        'pageSize'         => 'PageSize',
        'playbookUuid'     => 'PlaybookUuid',
        'regionId'         => 'RegionId',
        'ruleName'         => 'RuleName',
        'status'           => 'Status',
        'subUserId'        => 'SubUserId',
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
        if (null !== $this->autoResponseType) {
            $res['AutoResponseType'] = $this->autoResponseType;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->playbookUuid) {
            $res['PlaybookUuid'] = $this->playbookUuid;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAutomateResponseConfigsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['AutoResponseType'])) {
            $model->autoResponseType = $map['AutoResponseType'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PlaybookUuid'])) {
            $model->playbookUuid = $map['PlaybookUuid'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        return $model;
    }
}
