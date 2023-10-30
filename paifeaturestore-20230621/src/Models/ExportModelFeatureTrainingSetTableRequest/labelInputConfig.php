<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models\ExportModelFeatureTrainingSetTableRequest;

use AlibabaCloud\Tea\Model;

class labelInputConfig extends Model
{
    /**
     * @example 2022-07-02 00:00:00
     *
     * @var string
     */
    public $eventTime;

    /**
     * @var mixed[][]
     */
    public $partitions;
    protected $_name = [
        'eventTime'  => 'EventTime',
        'partitions' => 'Partitions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->partitions) {
            $res['Partitions'] = $this->partitions;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labelInputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['Partitions'])) {
            $model->partitions = $map['Partitions'];
        }

        return $model;
    }
}
