<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceResponseBody\data\numberList\skillGroups;
use AlibabaCloud\Tea\Model;

class numberList extends Model
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
     * @example 2ec7a58f-3243-4815-bb21-97b480b95f5e
     *
     * @var string
     */
    public $contactFlowId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 0830011****
     *
     * @var string
     */
    public $number;

    /**
     * @var string
     */
    public $province;

    /**
     * @var skillGroups[]
     */
    public $skillGroups;

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
        'active'        => 'Active',
        'city'          => 'City',
        'contactFlowId' => 'ContactFlowId',
        'instanceId'    => 'InstanceId',
        'number'        => 'Number',
        'province'      => 'Province',
        'skillGroups'   => 'SkillGroups',
        'usage'         => 'Usage',
        'userId'        => 'UserId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->number) {
            $res['Number'] = $this->number;
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
     * @return numberList
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Number'])) {
            $model->number = $map['Number'];
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
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
