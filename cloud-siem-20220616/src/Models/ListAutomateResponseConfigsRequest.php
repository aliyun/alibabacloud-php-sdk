<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models;

use AlibabaCloud\Tea\Model;

class ListAutomateResponseConfigsRequest extends Model
{
    /**
     * @description The type of the handling action. Valid values:
     *
     *   doPlaybook: runs a playbook.
     *   changeEventStatus: changes the status of an event.
     *   changeThreatLevel: changes the risk level of an event.
     *
     * @example doPlaybook
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The type of the automated response rule. Valid values:
     *
     *   event
     *   alert
     *
     * @example event
     *
     * @var string
     */
    public $autoResponseType;

    /**
     * @description The page number. Pages start from page 1.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The ID of the automated response rule.
     *
     * @example 123
     *
     * @var int
     */
    public $id;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The UUID of the playbook.
     *
     * @example system_aliyun_aegis_kill_quara_book
     *
     * @var string
     */
    public $playbookUuid;

    /**
     * @description The region in which the data management center of the threat analysis feature resides. Specify this parameter based on the regions in which your assets reside. Valid values:
     *
     *   cn-hangzhou: Your assets reside in regions in China.
     *   ap-southeast-1: Your assets reside in regions outside China.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the automated response rule.
     *
     * @example cfw kill quara book
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the rule. Valid values:
     *
     *   0: disabled
     *   100: enabled
     *
     * @example 0
     *
     * @var int
     */
    public $status;

    /**
     * @description The ID of the user who created the rule.
     *
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
