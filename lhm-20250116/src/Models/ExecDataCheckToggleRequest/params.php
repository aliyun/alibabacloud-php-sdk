<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\ExecDataCheckToggleRequest;

use AlibabaCloud\Dara\Model;

class params extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isScheduled;

    /**
     * @var int
     */
    public $lastBatchId;
    protected $_name = [
        'id' => 'id',
        'isScheduled' => 'isScheduled',
        'lastBatchId' => 'lastBatchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isScheduled) {
            $res['isScheduled'] = $this->isScheduled;
        }

        if (null !== $this->lastBatchId) {
            $res['lastBatchId'] = $this->lastBatchId;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isScheduled'])) {
            $model->isScheduled = $map['isScheduled'];
        }

        if (isset($map['lastBatchId'])) {
            $model->lastBatchId = $map['lastBatchId'];
        }

        return $model;
    }
}
