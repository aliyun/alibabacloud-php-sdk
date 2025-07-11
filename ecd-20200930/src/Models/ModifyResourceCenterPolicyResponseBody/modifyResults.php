<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyResourceCenterPolicyResponseBody;

use AlibabaCloud\Tea\Model;

class modifyResults extends Model
{
    /**
     * @description The verification result.
     *
     * @example true
     *
     * @var bool
     */
    public $checkResult;

    /**
     * @description The resource ID.
     *
     * @example ecd-e254cpyt9bb*****
     *
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'checkResult' => 'CheckResult',
        'resourceId' => 'ResourceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkResult) {
            $res['CheckResult'] = $this->checkResult;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modifyResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckResult'])) {
            $model->checkResult = $map['CheckResult'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
