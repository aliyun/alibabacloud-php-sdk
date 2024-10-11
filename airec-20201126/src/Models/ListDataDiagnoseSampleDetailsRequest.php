<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListDataDiagnoseSampleDetailsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1682179200
     *
     * @var int
     */
    public $endTime;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $key;

    /**
     * @description This parameter is required.
     *
     * @example 1665158400
     *
     * @var int
     */
    public $startTime;

    /**
     * @description This parameter is required.
     *
     * @example 1665936000000
     *
     * @var int
     */
    public $taskCreateTime;

    /**
     * @description This parameter is required.
     *
     * @example cycle
     *
     * @var string
     */
    public $taskSource;
    protected $_name = [
        'endTime'        => 'endTime',
        'key'            => 'key',
        'startTime'      => 'startTime',
        'taskCreateTime' => 'taskCreateTime',
        'taskSource'     => 'taskSource',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->taskCreateTime) {
            $res['taskCreateTime'] = $this->taskCreateTime;
        }
        if (null !== $this->taskSource) {
            $res['taskSource'] = $this->taskSource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataDiagnoseSampleDetailsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['taskCreateTime'])) {
            $model->taskCreateTime = $map['taskCreateTime'];
        }
        if (isset($map['taskSource'])) {
            $model->taskSource = $map['taskSource'];
        }

        return $model;
    }
}
