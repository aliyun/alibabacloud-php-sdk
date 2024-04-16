<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class TaskSnapshot extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int
     */
    public $commiter;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var Task
     */
    public $item;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $taskBizId;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'bizId'      => 'bizId',
        'commiter'   => 'commiter',
        'gmtCreated' => 'gmtCreated',
        'item'       => 'item',
        'message'    => 'message',
        'taskBizId'  => 'taskBizId',
        'version'    => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }
        if (null !== $this->commiter) {
            $res['commiter'] = $this->commiter;
        }
        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->item) {
            $res['item'] = null !== $this->item ? $this->item->toMap() : null;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->taskBizId) {
            $res['taskBizId'] = $this->taskBizId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskSnapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }
        if (isset($map['commiter'])) {
            $model->commiter = $map['commiter'];
        }
        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }
        if (isset($map['item'])) {
            $model->item = Task::fromMap($map['item']);
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['taskBizId'])) {
            $model->taskBizId = $map['taskBizId'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
