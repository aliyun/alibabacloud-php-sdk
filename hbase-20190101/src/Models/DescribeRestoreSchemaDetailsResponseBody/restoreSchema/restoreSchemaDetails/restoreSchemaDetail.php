<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema\restoreSchemaDetails;

use AlibabaCloud\Dara\Model;

class restoreSchemaDetail extends Model
{
    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $table;
    protected $_name = [
        'endTime' => 'EndTime',
        'message' => 'Message',
        'startTime' => 'StartTime',
        'state' => 'State',
        'table' => 'Table',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->table) {
            $res['Table'] = $this->table;
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
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['Table'])) {
            $model->table = $map['Table'];
        }

        return $model;
    }
}
