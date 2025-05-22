<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\UpdateServiceInstanceAttributeRequest\licenseData\responseInfo;

class licenseData extends Model
{
    /**
     * @var string
     */
    public $customData;

    /**
     * @var responseInfo
     */
    public $responseInfo;
    protected $_name = [
        'customData' => 'CustomData',
        'responseInfo' => 'ResponseInfo',
    ];

    public function validate()
    {
        if (null !== $this->responseInfo) {
            $this->responseInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customData) {
            $res['CustomData'] = $this->customData;
        }

        if (null !== $this->responseInfo) {
            $res['ResponseInfo'] = null !== $this->responseInfo ? $this->responseInfo->toArray($noStream) : $this->responseInfo;
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
        if (isset($map['CustomData'])) {
            $model->customData = $map['CustomData'];
        }

        if (isset($map['ResponseInfo'])) {
            $model->responseInfo = responseInfo::fromMap($map['ResponseInfo']);
        }

        return $model;
    }
}
