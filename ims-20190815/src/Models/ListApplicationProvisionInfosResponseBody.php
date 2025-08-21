<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListApplicationProvisionInfosResponseBody\applicationProvisionInfos;

class ListApplicationProvisionInfosResponseBody extends Model
{
    /**
     * @var applicationProvisionInfos
     */
    public $applicationProvisionInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationProvisionInfos' => 'ApplicationProvisionInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->applicationProvisionInfos) {
            $this->applicationProvisionInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationProvisionInfos) {
            $res['ApplicationProvisionInfos'] = null !== $this->applicationProvisionInfos ? $this->applicationProvisionInfos->toArray($noStream) : $this->applicationProvisionInfos;
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
        if (isset($map['ApplicationProvisionInfos'])) {
            $model->applicationProvisionInfos = applicationProvisionInfos::fromMap($map['ApplicationProvisionInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
