<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateCloudGtmAddressPoolRemarkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $addressPoolId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $remark;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'addressPoolId' => 'AddressPoolId',
        'clientToken' => 'ClientToken',
        'remark' => 'Remark',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
