<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponseBody\appSecrets;

class ListAppSecretIdsResponseBody extends Model
{
    /**
     * @var appSecrets
     */
    public $appSecrets;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'appSecrets' => 'AppSecrets',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->appSecrets) {
            $this->appSecrets->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appSecrets) {
            $res['AppSecrets'] = null !== $this->appSecrets ? $this->appSecrets->toArray($noStream) : $this->appSecrets;
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
        if (isset($map['AppSecrets'])) {
            $model->appSecrets = appSecrets::fromMap($map['AppSecrets']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
