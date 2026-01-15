<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safconsole\V20250521\Models;

use AlibabaCloud\Dara\Model;

class DescribeServiceAndSceneRequest extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var int
     */
    public $customerModuleId;
    protected $_name = [
        'authType' => 'AuthType',
        'customerModuleId' => 'CustomerModuleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['AuthType'] = $this->authType;
        }

        if (null !== $this->customerModuleId) {
            $res['CustomerModuleId'] = $this->customerModuleId;
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
        if (isset($map['AuthType'])) {
            $model->authType = $map['AuthType'];
        }

        if (isset($map['CustomerModuleId'])) {
            $model->customerModuleId = $map['CustomerModuleId'];
        }

        return $model;
    }
}
