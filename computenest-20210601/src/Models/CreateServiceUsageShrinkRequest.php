<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class CreateServiceUsageShrinkRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example service-d6fc5f949a9246xxxxxx
     *
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $userInformationShrink;
    protected $_name = [
        'clientToken'           => 'ClientToken',
        'serviceId'             => 'ServiceId',
        'userInformationShrink' => 'UserInformation',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }
        if (null !== $this->userInformationShrink) {
            $res['UserInformation'] = $this->userInformationShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceUsageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }
        if (isset($map['UserInformation'])) {
            $model->userInformationShrink = $map['UserInformation'];
        }

        return $model;
    }
}
