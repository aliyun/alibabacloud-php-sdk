<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCloudGtmAddressPoolBasicConfigRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example pool-89528023225442**16
     *
     * @var string
     */
    public $addressPoolId;

    /**
     * @example app
     *
     * @var string
     */
    public $addressPoolName;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example any_ok
     *
     * @var string
     */
    public $healthJudgement;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'addressPoolId'   => 'AddressPoolId',
        'addressPoolName' => 'AddressPoolName',
        'clientToken'     => 'ClientToken',
        'healthJudgement' => 'HealthJudgement',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->addressPoolId) {
            $res['AddressPoolId'] = $this->addressPoolId;
        }
        if (null !== $this->addressPoolName) {
            $res['AddressPoolName'] = $this->addressPoolName;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmAddressPoolBasicConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AddressPoolId'])) {
            $model->addressPoolId = $map['AddressPoolId'];
        }
        if (isset($map['AddressPoolName'])) {
            $model->addressPoolName = $map['AddressPoolName'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }

        return $model;
    }
}
