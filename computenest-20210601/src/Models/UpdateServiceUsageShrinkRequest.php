<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class UpdateServiceUsageShrinkRequest extends Model
{
    /**
     * @example AAAAAYChudnQUoBH+mGWFpb6oP0=
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @example service-39f4f251e94843xxxxxx
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
     * @return UpdateServiceUsageShrinkRequest
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
