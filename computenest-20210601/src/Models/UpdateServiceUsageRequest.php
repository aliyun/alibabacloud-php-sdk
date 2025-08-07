<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Dara\Model;

class UpdateServiceUsageRequest extends Model
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
     * @var string[]
     */
    public $userInformation;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'serviceId' => 'ServiceId',
        'userInformation' => 'UserInformation',
    ];

    public function validate()
    {
        if (\is_array($this->userInformation)) {
            Model::validateArray($this->userInformation);
        }
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

        if (null !== $this->userInformation) {
            if (\is_array($this->userInformation)) {
                $res['UserInformation'] = [];
                foreach ($this->userInformation as $key1 => $value1) {
                    $res['UserInformation'][$key1] = $value1;
                }
            }
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
            if (!empty($map['UserInformation'])) {
                $model->userInformation = [];
                foreach ($map['UserInformation'] as $key1 => $value1) {
                    $model->userInformation[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
