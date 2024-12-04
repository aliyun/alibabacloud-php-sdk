<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class ListAlertRulesShrinkRequest extends Model
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
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Maximum value: 100.
     *
     * This parameter is required.
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
     * @var string
     */
    public $taskIdsShrink;

    /**
     * @description The alert triggering condition.
     *
     * @var string
     */
    public $typesShrink;
    protected $_name = [
        'name'          => 'Name',
        'owner'         => 'Owner',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'receiver'      => 'Receiver',
        'taskIdsShrink' => 'TaskIds',
        'typesShrink'   => 'Types',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->taskIdsShrink) {
            $res['TaskIds'] = $this->taskIdsShrink;
        }
        if (null !== $this->typesShrink) {
            $res['Types'] = $this->typesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAlertRulesShrinkRequest
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
            $model->taskIdsShrink = $map['TaskIds'];
        }
        if (isset($map['Types'])) {
            $model->typesShrink = $map['Types'];
        }

        return $model;
    }
}
