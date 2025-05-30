<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters\after;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters\before;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters\offset;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters\op;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\SinkBaiLianParameters\partition;

class SinkBaiLianParameters extends Model
{
    /**
     * @var after
     */
    public $after;

    /**
     * @var string
     */
    public $applicationType;

    /**
     * @var before
     */
    public $before;

    /**
     * @var mixed
     */
    public $context;

    /**
     * @var mixed
     */
    public $extend;

    /**
     * @var offset
     */
    public $offset;

    /**
     * @var op
     */
    public $op;

    /**
     * @var partition
     */
    public $partition;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'after' => 'After',
        'applicationType' => 'ApplicationType',
        'before' => 'Before',
        'context' => 'Context',
        'extend' => 'Extend',
        'offset' => 'Offset',
        'op' => 'Op',
        'partition' => 'Partition',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (null !== $this->after) {
            $this->after->validate();
        }
        if (null !== $this->before) {
            $this->before->validate();
        }
        if (null !== $this->offset) {
            $this->offset->validate();
        }
        if (null !== $this->op) {
            $this->op->validate();
        }
        if (null !== $this->partition) {
            $this->partition->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->after) {
            $res['After'] = null !== $this->after ? $this->after->toArray($noStream) : $this->after;
        }

        if (null !== $this->applicationType) {
            $res['ApplicationType'] = $this->applicationType;
        }

        if (null !== $this->before) {
            $res['Before'] = null !== $this->before ? $this->before->toArray($noStream) : $this->before;
        }

        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->extend) {
            $res['Extend'] = $this->extend;
        }

        if (null !== $this->offset) {
            $res['Offset'] = null !== $this->offset ? $this->offset->toArray($noStream) : $this->offset;
        }

        if (null !== $this->op) {
            $res['Op'] = null !== $this->op ? $this->op->toArray($noStream) : $this->op;
        }

        if (null !== $this->partition) {
            $res['Partition'] = null !== $this->partition ? $this->partition->toArray($noStream) : $this->partition;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['After'])) {
            $model->after = after::fromMap($map['After']);
        }

        if (isset($map['ApplicationType'])) {
            $model->applicationType = $map['ApplicationType'];
        }

        if (isset($map['Before'])) {
            $model->before = before::fromMap($map['Before']);
        }

        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['Extend'])) {
            $model->extend = $map['Extend'];
        }

        if (isset($map['Offset'])) {
            $model->offset = offset::fromMap($map['Offset']);
        }

        if (isset($map['Op'])) {
            $model->op = op::fromMap($map['Op']);
        }

        if (isset($map['Partition'])) {
            $model->partition = partition::fromMap($map['Partition']);
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
