<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocnp\V20230828\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocnp\V20230828\Models\ValidateResourceRequest\userAccessParam;

class ValidateResourceRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var userAccessParam
     */
    public $userAccessParam;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'userAccessParam' => 'UserAccessParam',
    ];

    public function validate()
    {
        if (null !== $this->userAccessParam) {
            $this->userAccessParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->userAccessParam) {
            $res['UserAccessParam'] = null !== $this->userAccessParam ? $this->userAccessParam->toArray($noStream) : $this->userAccessParam;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
