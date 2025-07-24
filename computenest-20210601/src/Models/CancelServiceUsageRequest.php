<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class CancelServiceUsageRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotency of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The **token** can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to delete the application.
     *
     * >  After you delete the application, you must re-enter the application information the next time you submit an application.
     *
     * @example true
     *
     * @var bool
     */
    public $needDelete;

    /**
     * @description The service ID.
     *
     * This parameter is required.
     *
     * @example service-d6fc5f949a9246xxxxxx
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'needDelete' => 'NeedDelete',
        'serviceId' => 'ServiceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->needDelete) {
            $res['NeedDelete'] = $this->needDelete;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelServiceUsageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['NeedDelete'])) {
            $model->needDelete = $map['NeedDelete'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
