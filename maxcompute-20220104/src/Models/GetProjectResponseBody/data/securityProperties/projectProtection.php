<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\securityProperties;

use AlibabaCloud\Tea\Model;

class projectProtection extends Model
{
    /**
     * @description The exception policy. If cross-project data access operations are required, the project owner must configure an exception policy in advance to allow the specified user to transfer data of a specified object from the current project to a specified project. After the exception policy is configured, data of the object can be transferred to the specified project even if the project data protection feature is enabled.
     *
     * @example {
     * "Action":["odps:<Action1>[, <Action2>, ...]"],
     * "Resource":"acs:odps:*:<Resource>",
     * }
     * @var string
     */
    public $exceptionPolicy;

    /**
     * @description Indicates whether project data protection is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $protected;
    protected $_name = [
        'exceptionPolicy' => 'exceptionPolicy',
        'protected'       => 'protected',
    ];

    public function validate()
    {
    }

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
