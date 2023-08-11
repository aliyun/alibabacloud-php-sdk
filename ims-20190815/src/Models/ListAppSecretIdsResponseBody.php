<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListAppSecretIdsResponseBody\appSecrets;
use AlibabaCloud\Tea\Model;

class ListAppSecretIdsResponseBody extends Model
{
    /**
     * @description The details of the application secret.
     *
     * @var appSecrets
     */
    public $appSecrets;

    /**
     * @description The ID of the request.
     *
     * @example 5F2FD500-7173-47D6-BD2F-EB60879B4F16
     *
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
