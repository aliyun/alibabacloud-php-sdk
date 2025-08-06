<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetInstanceLicenseResponseBody\license;

class GetInstanceLicenseResponseBody extends Model
{
    /**
     * @var license
     */
    public $license;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'license' => 'License',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->license) {
            $this->license->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->license) {
            $res['License'] = null !== $this->license ? $this->license->toArray($noStream) : $this->license;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['License'])) {
            $model->license = license::fromMap($map['License']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
