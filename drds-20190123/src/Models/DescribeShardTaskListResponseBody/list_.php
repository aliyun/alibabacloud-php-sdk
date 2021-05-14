<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\DescribeShardTaskListResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var string
     */
    public $sourceTableName;

    /**
     * @var string
     */
    public $targetTableName;

    /**
     * @var int
     */
    public $expired;

    /**
     * @var int
     */
    public $stage;

    /**
     * @var int
     */
    public $progress;

    /**
     * @var int
     */
    public $delay;
    protected $_name = [
        'sourceTableName' => 'SourceTableName',
        'targetTableName' => 'TargetTableName',
        'expired'         => 'Expired',
        'stage'           => 'Stage',
        'progress'        => 'Progress',
        'delay'           => 'Delay',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceTableName) {
            $res['SourceTableName'] = $this->sourceTableName;
        }
        if (null !== $this->targetTableName) {
            $res['TargetTableName'] = $this->targetTableName;
        }
        if (null !== $this->expired) {
            $res['Expired'] = $this->expired;
        }
        if (null !== $this->stage) {
            $res['Stage'] = $this->stage;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->delay) {
            $res['Delay'] = $this->delay;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceTableName'])) {
            $model->sourceTableName = $map['SourceTableName'];
        }
        if (isset($map['TargetTableName'])) {
            $model->targetTableName = $map['TargetTableName'];
        }
        if (isset($map['Expired'])) {
            $model->expired = $map['Expired'];
        }
        if (isset($map['Stage'])) {
            $model->stage = $map['Stage'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Delay'])) {
            $model->delay = $map['Delay'];
        }

        return $model;
    }
}
