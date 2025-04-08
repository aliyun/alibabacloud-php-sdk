<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListPhoneNumbersResponseBody\data\list_\skillGroups;

class list_ extends Model
{
    /**
     * @var bool
     */
    public $active;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $contactFlowId;

    /**
     * @var string
     */
    public $contactFlowName;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $number;

    /**
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
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $usage;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'active' => 'Active',
        'city' => 'City',
        'contactFlowId' => 'ContactFlowId',
        'contactFlowName' => 'ContactFlowName',
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'number' => 'Number',
        'provider' => 'Provider',
        'province' => 'Province',
        'skillGroups' => 'SkillGroups',
        'tags' => 'Tags',
        'usage' => 'Usage',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        if (\is_array($this->skillGroups)) {
            Model::validateArray($this->skillGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->skillGroups)) {
                $res['SkillGroups'] = [];
                $n1 = 0;
                foreach ($this->skillGroups as $item1) {
                    $res['SkillGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['SkillGroups'] as $item1) {
                    $model->skillGroups[$n1++] = skillGroups::fromMap($item1);
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
