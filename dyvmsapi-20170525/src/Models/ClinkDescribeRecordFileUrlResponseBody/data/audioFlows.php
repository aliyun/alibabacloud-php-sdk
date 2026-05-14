<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ClinkDescribeRecordFileUrlResponseBody\data;

use AlibabaCloud\Dara\Model;

class audioFlows extends Model
{
    /**
     * @var int
     */
    public $node;

    /**
     * @var int
     */
    public $timestamp;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'node' => 'Node',
        'timestamp' => 'Timestamp',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }

        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }

        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
