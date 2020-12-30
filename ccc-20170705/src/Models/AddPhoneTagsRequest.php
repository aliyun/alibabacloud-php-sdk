<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class AddPhoneTagsRequest extends Model
{
    /**
     * @var string
     */
    public $serviceTag;

    /**
     * @var string
     */
    public $regionNameProvince;

    /**
     * @var string
     */
    public $regionNameCity;

    /**
     * @var int
     */
    public $type;

    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $sipTag;

    /**
     * @var string[]
     */
    public $phoneNumberList;
    protected $_name = [
        'serviceTag'         => 'ServiceTag',
        'regionNameProvince' => 'RegionNameProvince',
        'regionNameCity'     => 'RegionNameCity',
        'type'               => 'Type',
        'concurrency'        => 'Concurrency',
        'instanceId'         => 'InstanceId',
        'provider'           => 'Provider',
        'sipTag'             => 'SipTag',
        'phoneNumberList'    => 'PhoneNumberList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serviceTag) {
            $res['ServiceTag'] = $this->serviceTag;
        }
        if (null !== $this->regionNameProvince) {
            $res['RegionNameProvince'] = $this->regionNameProvince;
        }
        if (null !== $this->regionNameCity) {
            $res['RegionNameCity'] = $this->regionNameCity;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->sipTag) {
            $res['SipTag'] = $this->sipTag;
        }
        if (null !== $this->phoneNumberList) {
            $res['PhoneNumberList'] = $this->phoneNumberList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPhoneTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServiceTag'])) {
            $model->serviceTag = $map['ServiceTag'];
        }
        if (isset($map['RegionNameProvince'])) {
            $model->regionNameProvince = $map['RegionNameProvince'];
        }
        if (isset($map['RegionNameCity'])) {
            $model->regionNameCity = $map['RegionNameCity'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['SipTag'])) {
            $model->sipTag = $map['SipTag'];
        }
        if (isset($map['PhoneNumberList'])) {
            if (!empty($map['PhoneNumberList'])) {
                $model->phoneNumberList = $map['PhoneNumberList'];
            }
        }

        return $model;
    }
}
