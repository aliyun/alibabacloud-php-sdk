<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetProjectAuthorizationResponseBody\projectAuthorization;

class GetProjectAuthorizationResponseBody extends Model
{
    /**
     * @var projectAuthorization
     */
    public $projectAuthorization;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'projectAuthorization' => 'ProjectAuthorization',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->projectAuthorization) {
            $this->projectAuthorization->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectAuthorization) {
            $res['ProjectAuthorization'] = null !== $this->projectAuthorization ? $this->projectAuthorization->toArray($noStream) : $this->projectAuthorization;
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
        if (isset($map['ProjectAuthorization'])) {
            $model->projectAuthorization = projectAuthorization::fromMap($map['ProjectAuthorization']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
