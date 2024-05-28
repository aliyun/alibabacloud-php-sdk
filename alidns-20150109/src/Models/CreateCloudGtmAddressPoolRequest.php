<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class CreateCloudGtmAddressPoolRequest extends Model
{
    /**
     * @example en-US
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @example Address pool-1
     *
     * @var string
     */
    public $addressPoolName;

    /**
     * @example IPv4
     *
     * @var string
     */
    public $addressPoolType;

    /**
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example enable
     *
     * @var string
     */
    public $enableStatus;

    /**
     * @example any_ok
     *
     * @var string
     */
    public $healthJudgement;

    /**
     * @example app
     *
     * @var string
     */
    public $remark;
    protected $_name = [
        'acceptLanguage'  => 'AcceptLanguage',
        'addressPoolName' => 'AddressPoolName',
        'addressPoolType' => 'AddressPoolType',
        'clientToken'     => 'ClientToken',
        'enableStatus'    => 'EnableStatus',
        'healthJudgement' => 'HealthJudgement',
        'remark'          => 'Remark',
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
        if (null !== $this->addressPoolName) {
            $res['AddressPoolName'] = $this->addressPoolName;
        }
        if (null !== $this->addressPoolType) {
            $res['AddressPoolType'] = $this->addressPoolType;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }
        if (null !== $this->healthJudgement) {
            $res['HealthJudgement'] = $this->healthJudgement;
        }
        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCloudGtmAddressPoolRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AddressPoolName'])) {
            $model->addressPoolName = $map['AddressPoolName'];
        }
        if (isset($map['AddressPoolType'])) {
            $model->addressPoolType = $map['AddressPoolType'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }
        if (isset($map['HealthJudgement'])) {
            $model->healthJudgement = $map['HealthJudgement'];
        }
        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        return $model;
    }
}
