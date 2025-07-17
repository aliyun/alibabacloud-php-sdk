<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListAlertRulesRequest extends Model
{
    /**
     * @description The name of the rule.
     *
     * @example error_rule
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Alibaba Cloud account used by the owner of the rule.
     *
     * @example 1933790683****
     *
     * @var string
     */
    public $owner;

    /**
     * @description The page number. Pages start from page 1.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the Alibaba Cloud account used by the alert recipient.
     *
     * @example 1933790683****
     *
     * @var string
     */
    public $receiver;

    /**
     * @description The IDs of the scheduling tasks.
     *
     * @var int[]
     */
    public $taskIds;

    /**
     * @description The alert triggering condition.
     *
     * @var string[]
     */
    public $types;
    protected $_name = [
        'name' => 'Name',
        'owner' => 'Owner',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'receiver' => 'Receiver',
        'taskIds' => 'TaskIds',
        'types' => 'Types',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->receiver) {
            $res['Receiver'] = $this->receiver;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->types) {
            $res['Types'] = $this->types;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Receiver'])) {
            $model->receiver = $map['Receiver'];
        }
        if (isset($map['TaskIds'])) {
            if (!empty($map['TaskIds'])) {
                $model->taskIds = $map['TaskIds'];
            }
        }
        if (isset($map['Types'])) {
            if (!empty($map['Types'])) {
                $model->types = $map['Types'];
            }
        }

        return $model;
    }
}
