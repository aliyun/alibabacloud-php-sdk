<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ListAlertRulesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $owner;
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
    public $receiver;
    /**
     * @var string
     */
    public $taskIdsShrink;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
