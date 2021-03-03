<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20170705\Models\ListPhoneTagsResponseBody\phoneNumbers;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @var int
     */
    public $type;

    /**
     * @var string
     */
    public $serviceTag;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string[]
     */
    public $skillGroupIdList;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $phoneNumberId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $phoneNumberDescription;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $province;

    /**
     * @var int
     */
    public $concurrency;
    protected $_name = [
        'type'                   => 'Type',
        'serviceTag'             => 'ServiceTag',
        'createTime'             => 'CreateTime',
        'city'                   => 'City',
        'skillGroupIdList'       => 'SkillGroupIdList',
        'instanceId'             => 'InstanceId',
        'usage'                  => 'Usage',
        'phoneNumberId'          => 'PhoneNumberId',
        'provider'               => 'Provider',
        'number'                 => 'Number',
        'phoneNumberDescription' => 'PhoneNumberDescription',
        'contactFlowId'          => 'ContactFlowId',
        'province'               => 'Province',
        'concurrency'            => 'Concurrency',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->serviceTag) {
            $res['ServiceTag'] = $this->serviceTag;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->skillGroupIdList) {
            $res['SkillGroupIdList'] = $this->skillGroupIdList;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->phoneNumberId) {
            $res['PhoneNumberId'] = $this->phoneNumberId;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->phoneNumberDescription) {
            $res['PhoneNumberDescription'] = $this->phoneNumberDescription;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->concurrency) {
            $res['Concurrency'] = $this->concurrency;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['ServiceTag'])) {
            $model->serviceTag = $map['ServiceTag'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['SkillGroupIdList'])) {
            if (!empty($map['SkillGroupIdList'])) {
                $model->skillGroupIdList = $map['SkillGroupIdList'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['PhoneNumberId'])) {
            $model->phoneNumberId = $map['PhoneNumberId'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['PhoneNumberDescription'])) {
            $model->phoneNumberDescription = $map['PhoneNumberDescription'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['Concurrency'])) {
            $model->concurrency = $map['Concurrency'];
        }

        return $model;
    }
}
