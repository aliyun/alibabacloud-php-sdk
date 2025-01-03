<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Tea\Model;

class ValidateResourceShrinkRequest extends Model
{
    /**
     * @description Resource ID
     *
     * @example ehpc-sh-ouypm5aucy
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description User Authorization Parameters
     *
     * @var string
     */
    public $userAccessParamShrink;
    protected $_name = [
        'clusterId'             => 'ClusterId',
        'userAccessParamShrink' => 'UserAccessParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->userAccessParamShrink) {
            $res['UserAccessParam'] = $this->userAccessParamShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateResourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UserAccessParam'])) {
            $model->userAccessParamShrink = $map['UserAccessParam'];
        }

        return $model;
    }
}
