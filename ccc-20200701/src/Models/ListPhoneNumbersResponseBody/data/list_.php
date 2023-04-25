<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersResponseBody\data\list_\skillGroups;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $city;

    /**
     * @example a3fb6c62-9b49-4942-ae5b-cf2abd4123ek
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $contactFlowName;

    /**
     * @example 1617958538000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 08330011****
     *
     * @var string
     */
    public $number;

    /**
     * @example alicom
     *
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $province;

    /**
     * @var skillGroups[]
     */
    public $skillGroups;

    /**
     * @example M1
     *
     * @var string
     */
    public $tags;

    /**
     * @example Bidirection
     *
     * @var string
     */
    public $usage;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'active'          => 'Active',
        'city'            => 'City',
        'contactFlowId'   => 'ContactFlowId',
        'contactFlowName' => 'ContactFlowName',
        'createTime'      => 'CreateTime',
        'instanceId'      => 'InstanceId',
        'number'          => 'Number',
        'provider'        => 'Provider',
        'province'        => 'Province',
        'skillGroups'     => 'SkillGroups',
        'tags'            => 'Tags',
        'usage'           => 'Usage',
        'userId'          => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->active) {
            $res['Active'] = $this->active;
        }
        if (null !== $this->city) {
            $res['City'] = $this->city;
        }
        if (null !== $this->contactFlowId) {
            $res['ContactFlowId'] = $this->contactFlowId;
        }
        if (null !== $this->contactFlowName) {
            $res['ContactFlowName'] = $this->contactFlowName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
        }
        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }
        if (null !== $this->province) {
            $res['Province'] = $this->province;
        }
        if (null !== $this->skillGroups) {
            $res['SkillGroups'] = [];
            if (null !== $this->skillGroups && \is_array($this->skillGroups)) {
                $n = 0;
                foreach ($this->skillGroups as $item) {
                    $res['SkillGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Active'])) {
            $model->active = $map['Active'];
        }
        if (isset($map['City'])) {
            $model->city = $map['City'];
        }
        if (isset($map['ContactFlowId'])) {
            $model->contactFlowId = $map['ContactFlowId'];
        }
        if (isset($map['ContactFlowName'])) {
            $model->contactFlowName = $map['ContactFlowName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
        }
        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }
        if (isset($map['Province'])) {
            $model->province = $map['Province'];
        }
        if (isset($map['SkillGroups'])) {
            if (!empty($map['SkillGroups'])) {
                $model->skillGroups = [];
                $n                  = 0;
                foreach ($map['SkillGroups'] as $item) {
                    $model->skillGroups[$n++] = null !== $item ? skillGroups::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
