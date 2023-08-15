<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20190101\Models\DescribeRestoreSchemaDetailsResponseBody\restoreSchema\restoreSchemaDetails;

use AlibabaCloud\Tea\Model;

class restoreSchemaDetail extends Model
{
    /**
     * @example 2020-11-05T06:45:18Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example null
     *
     * @var string
     */
    public $message;

    /**
     * @example 2020-11-05T06:45:14Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @example SUCCEEDED
     *
     * @var string
     */
    public $state;

    /**
     * @example default:test1
     *
     * @var string
     */
    public $table;
    protected $_name = [
        'endTime'   => 'EndTime',
        'message'   => 'Message',
        'startTime' => 'StartTime',
        'state'     => 'State',
        'table'     => 'Table',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return restoreSchemaDetail
     */
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
