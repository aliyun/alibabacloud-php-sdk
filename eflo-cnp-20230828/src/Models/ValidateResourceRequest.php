<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceRequest\userAccessParam;
use AlibabaCloud\Tea\Model;

class ValidateResourceRequest extends Model
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
     * @var userAccessParam
     */
    public $userAccessParam;
    protected $_name = [
        'clusterId'       => 'ClusterId',
        'userAccessParam' => 'UserAccessParam',
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
        if (null !== $this->userAccessParam) {
            $res['UserAccessParam'] = null !== $this->userAccessParam ? $this->userAccessParam->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ValidateResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['UserAccessParam'])) {
            $model->userAccessParam = userAccessParam::fromMap($map['UserAccessParam']);
        }

        return $model;
    }
}
