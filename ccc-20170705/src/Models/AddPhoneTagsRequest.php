<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models;

use AlibabaCloud\Tea\Model;

class AddPhoneTagsRequest extends Model
{
    /**
     * @var int
     */
    public $concurrency;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string[]
     */
    public $phoneNumberList;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $regionNameCity;

    /**
     * @var string
     */
    public $regionNameProvince;

    /**
     * @var string
     */
    public $serviceTag;

    /**
     * @var string
     */
    public $sipTag;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'concurrency'        => 'Concurrency',
        'instanceId'         => 'InstanceId',
        'phoneNumberList'    => 'PhoneNumberList',
        'provider'           => 'Provider',
        'regionNameCity'     => 'RegionNameCity',
        'regionNameProvince' => 'RegionNameProvince',
        'serviceTag'         => 'ServiceTag',
        'sipTag'             => 'SipTag',
        'type'               => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->phoneNumberList) {
            $res['PhoneNumberList'] = $this->phoneNumberList;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->regionNameCity) {
            $res['RegionNameCity'] = $this->regionNameCity;
        }
        if (null !== $this->regionNameProvince) {
            $res['RegionNameProvince'] = $this->regionNameProvince;
        }
        if (null !== $this->serviceTag) {
            $res['ServiceTag'] = $this->serviceTag;
        }
        if (null !== $this->sipTag) {
            $res['SipTag'] = $this->sipTag;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PhoneNumberList'])) {
            if (!empty($map['PhoneNumberList'])) {
                $model->phoneNumberList = $map['PhoneNumberList'];
            }
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['RegionNameCity'])) {
            $model->regionNameCity = $map['RegionNameCity'];
        }
        if (isset($map['RegionNameProvince'])) {
            $model->regionNameProvince = $map['RegionNameProvince'];
        }
        if (isset($map['ServiceTag'])) {
            $model->serviceTag = $map['ServiceTag'];
        }
        if (isset($map['SipTag'])) {
            $model->sipTag = $map['SipTag'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
