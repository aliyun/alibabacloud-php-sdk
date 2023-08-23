<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\ListProjectsResponseBody\data\projects\securityProperties;

use AlibabaCloud\Tea\Model;

class projectProtection extends Model
{
    /**
     * @example {
     * ],
     * "Resource": "acs:odps:*:",
     * }
     * @var string
     */
    public $exceptionPolicy;

    /**
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
