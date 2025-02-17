<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceUsageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
