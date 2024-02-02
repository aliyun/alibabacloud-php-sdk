<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyResponseBody\policies;

use AlibabaCloud\Tea\Model;

class storageRule extends Model
{
    /**
     * @description Indicates whether the instant access feature is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enableImmediateAccess;
    protected $_name = [
        'enableImmediateAccess' => 'EnableImmediateAccess',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enableImmediateAccess) {
            $res['EnableImmediateAccess'] = $this->enableImmediateAccess;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnableImmediateAccess'])) {
            $model->enableImmediateAccess = $map['EnableImmediateAccess'];
        }

        return $model;
    }
}
