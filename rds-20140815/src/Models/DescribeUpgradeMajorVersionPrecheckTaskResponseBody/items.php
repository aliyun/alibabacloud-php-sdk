<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeUpgradeMajorVersionPrecheckTaskResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @description The time at which the upgrade check was performed.
     *
     * The value of this parameter is a timestamp that follows the UNIX time format. Unit: milliseconds.
     * @example 1635143903000
     *
     * @var string
     */
    public $checkTime;

    /**
     * @description The content of the upgrade check report.
     *
     * @example [user_check_report]User check success\\n[pg_upgrade_internal.log]Performing...
     *
     * @var string
     */
    public $detail;

    /**
     * @description The expiration time of the upgrade check report.
     *
     * The value of this parameter is a timestamp that follows the UNIX time format. Unit: milliseconds.
     * @example 1635748703000
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The result of the upgrade check.
     *
     * Valid values:
     *
     *   Success
     *   Fail
     *
     * >  If the check result is **Fail**, you must check the value of the **Detail** parameter to obtain the information about the errors that occurred, resolve the errors, and then try again. For more information about how to resolve common errors, see [Introduction to the check report for a major engine version upgrade to an ApsaraDB RDS for PostgreSQL instance](https://help.aliyun.com/document_detail/218391.html).
     * @example Success
     *
     * @var string
     */
    public $result;

    /**
     * @description The original major engine version of the instance.
     *
     * @example 11.0
     *
     * @var string
     */
    public $sourceMajorVersion;

    /**
     * @description The new major engine version of the instance.
     *
     * @example 12.0
     *
     * @var string
     */
    public $targetMajorVersion;

    /**
     * @description The ID of the upgrade check task.
     *
     * @example 416980000
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'checkTime'          => 'CheckTime',
        'detail'             => 'Detail',
        'effectiveTime'      => 'EffectiveTime',
        'result'             => 'Result',
        'sourceMajorVersion' => 'SourceMajorVersion',
        'targetMajorVersion' => 'TargetMajorVersion',
        'taskId'             => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkTime) {
            $res['CheckTime'] = $this->checkTime;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->sourceMajorVersion) {
            $res['SourceMajorVersion'] = $this->sourceMajorVersion;
        }
        if (null !== $this->targetMajorVersion) {
            $res['TargetMajorVersion'] = $this->targetMajorVersion;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckTime'])) {
            $model->checkTime = $map['CheckTime'];
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }
        if (isset($map['SourceMajorVersion'])) {
            $model->sourceMajorVersion = $map['SourceMajorVersion'];
        }
        if (isset($map['TargetMajorVersion'])) {
            $model->targetMajorVersion = $map['TargetMajorVersion'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
