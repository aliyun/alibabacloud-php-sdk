<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListMonitorDataResponseBody;

use AlibabaCloud\Tea\Model;

class monitorData extends Model
{
    /**
     * @example avg_latency
     *
     * @var string
     */
    public $dataItem;

    /**
     * @example in_bps
     *
     * @var string
     */
    public $key;

    /**
     * @example 1609430460000
     *
     * @var int
     */
    public $timestamp;

    /**
     * @example 10.1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'dataItem'  => 'DataItem',
        'key'       => 'Key',
        'timestamp' => 'Timestamp',
        'value'     => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataItem) {
            $res['DataItem'] = $this->dataItem;
        }
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->timestamp) {
            $res['Timestamp'] = $this->timestamp;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return monitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataItem'])) {
            $model->dataItem = $map['DataItem'];
        }
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Timestamp'])) {
            $model->timestamp = $map['Timestamp'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
