<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponseBody\appSecrets;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appSecrets) {
            $res['AppSecrets'] = null !== $this->appSecrets ? $this->appSecrets->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAppSecretIdsResponseBody
     */
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
