<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class LiveChannelConfiguration extends Model
{
    /**
     * @description description
     *
     * @var string
     */
    public $description;

    /**
     * @var LiveChannelSnapshot
     */
    public $snapshot;

    /**
     * @description description
     *
     * @var string
     */
    public $status;

    /**
     * @var LiveChannelTarget
     */
    public $target;
    protected $_name = [
        'description' => 'Description',
        'snapshot'    => 'Snapshot',
        'status'      => 'Status',
        'target'      => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->snapshot) {
            $res['Snapshot'] = null !== $this->snapshot ? $this->snapshot->toMap() : null;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->target) {
            $res['Target'] = null !== $this->target ? $this->target->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LiveChannelConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Snapshot'])) {
            $model->snapshot = LiveChannelSnapshot::fromMap($map['Snapshot']);
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Target'])) {
            $model->target = LiveChannelTarget::fromMap($map['Target']);
        }

        return $model;
    }
}
