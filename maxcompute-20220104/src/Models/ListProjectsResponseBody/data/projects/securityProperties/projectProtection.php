<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\securityProperties;

use AlibabaCloud\Tea\Model;

class projectProtection extends Model
{
    /**
     * @description If you enable the project data protection mechanism, you can configure exception or trusted projects. This allows specified users to transfer data of a specified object to a specified project. The project data protection mechanism does not take effect in all the situations that are specified in the exception policy.
     *
     * @example {
     * "Version": "1",
     * "Statement": [
     * {
     * "Effect": "Allow",
     * "Principal": "",
     * "Action": [
     * "odps:[, , ...]"
     * ],
     * "Resource": "acs:odps:*:",
     * "Condition": {
     * "StringEquals": {
     * "odps:TaskType": [
     * ""
     * ]
     * }
     * }
     * }
     * ]
     * }
     *
     * @var string
     */
    public $exceptionPolicy;

    /**
     * @description Indicates whether the [data protection mechanism](https://www.alibabacloud.com/help/zh/maxcompute/security-and-compliance/project-data-protection) is enabled for the project. This allows or denies data transfer across projects. By default, the data protection mechanism is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $protected;
    protected $_name = [
        'exceptionPolicy' => 'exceptionPolicy',
        'protected' => 'protected',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->exceptionPolicy) {
            $res['exceptionPolicy'] = $this->exceptionPolicy;
        }
        if (null !== $this->protected) {
            $res['protected'] = $this->protected;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectProtection
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['exceptionPolicy'])) {
            $model->exceptionPolicy = $map['exceptionPolicy'];
        }
        if (isset($map['protected'])) {
            $model->protected = $map['protected'];
        }

        return $model;
    }
}
