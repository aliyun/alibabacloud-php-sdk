<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class ActivateMigrationTargetInstanceResponseBody extends Model
{
    /**
     * @description The name of the destination instance.
     *
     * @example pgm-bp102g323jd4****
     *
     * @var string
     */
    public $DBInstanceName;

    /**
     * @description The ID of the request.
     *
     * @example 76364A52-E0AB-5CC8-9818-CF1DC482C092
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The private IP address that is used to connect to the self-managed PostgreSQL instance.
     *
     * @example 172.16.XX.XX
     *
     * @var string
     */
    public $sourceIpAddress;

    /**
     * @description The port number that is used to connect to the self-managed PostgreSQL instance.
     *
     * @example 5432
     *
     * @var int
     */
    public $sourcePort;

    /**
     * @description The ID of the identification task.
     *
     * @example 440913675
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'DBInstanceName'  => 'DBInstanceName',
        'requestId'       => 'RequestId',
        'sourceIpAddress' => 'SourceIpAddress',
        'sourcePort'      => 'SourcePort',
        'taskId'          => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceName) {
            $res['DBInstanceName'] = $this->DBInstanceName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceIpAddress) {
            $res['SourceIpAddress'] = $this->sourceIpAddress;
        }
        if (null !== $this->sourcePort) {
            $res['SourcePort'] = $this->sourcePort;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ActivateMigrationTargetInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceName'])) {
            $model->DBInstanceName = $map['DBInstanceName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceIpAddress'])) {
            $model->sourceIpAddress = $map['SourceIpAddress'];
        }
        if (isset($map['SourcePort'])) {
            $model->sourcePort = $map['SourcePort'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
