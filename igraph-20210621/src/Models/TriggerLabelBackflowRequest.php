<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\Tea\Model;

class TriggerLabelBackflowRequest extends Model
{
    /**
     * @var string
     */
    public $odpsPartition;

    /**
     * @var string
     */
    public $timestamp;
    protected $_name = [
        'odpsPartition' => 'odpsPartition',
        'timestamp'     => 'timestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->odpsPartition) {
            $res['odpsPartition'] = $this->odpsPartition;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TriggerLabelBackflowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['odpsPartition'])) {
            $model->odpsPartition = $map['odpsPartition'];
        }
        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
