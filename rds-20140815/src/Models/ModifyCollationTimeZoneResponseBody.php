<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ModifyCollationTimeZoneResponseBody extends Model
{
    /**
     * @description The character set collation of the instance.
     *
     * @example Latin1_General_CI_AS
     *
     * @var string
     */
    public $collation;

    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5xxxxxxx
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the request.
     *
     * @example 8EA054AF-DFA7-497D-9F57-790FFC974C0B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the task.
     *
     * @example 114413215
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The time zone of the instance.
     *
     * @example China Standard Time
     *
     * @var string
     */
    public $timezone;
    protected $_name = [
        'collation'    => 'Collation',
        'DBInstanceId' => 'DBInstanceId',
        'requestId'    => 'RequestId',
        'taskId'       => 'TaskId',
        'timezone'     => 'Timezone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collation) {
            $res['Collation'] = $this->collation;
        }
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->timezone) {
            $res['Timezone'] = $this->timezone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCollationTimeZoneResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Collation'])) {
            $model->collation = $map['Collation'];
        }
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Timezone'])) {
            $model->timezone = $map['Timezone'];
        }

        return $model;
    }
}
