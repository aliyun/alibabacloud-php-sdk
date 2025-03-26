<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyResourceCenterPolicyResponseBody;

use AlibabaCloud\Dara\Model;

class modifyResults extends Model
{
    /**
     * @var bool
     */
    public $checkResult;

    /**
     * @var string
     */
    public $resourceId;
    protected $_name = [
        'checkResult' => 'CheckResult',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
