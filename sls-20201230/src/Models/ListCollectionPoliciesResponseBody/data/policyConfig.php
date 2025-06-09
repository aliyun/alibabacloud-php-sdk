<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\ListCollectionPoliciesResponseBody\data;

use AlibabaCloud\Dara\Model;

class policyConfig extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string[]
     */
    public $regions;

    /**
     * @var string
     */
    public $resourceMode;

    /**
     * @var mixed[]
     */
    public $resourceTags;
    protected $_name = [
        'instanceIds' => 'instanceIds',
        'regions' => 'regions',
        'resourceMode' => 'resourceMode',
        'resourceTags' => 'resourceTags',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        if (\is_array($this->regions)) {
            Model::validateArray($this->regions);
        }
        if (\is_array($this->resourceTags)) {
            Model::validateArray($this->resourceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['instanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['instanceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regions) {
            if (\is_array($this->regions)) {
                $res['regions'] = [];
                $n1 = 0;
                foreach ($this->regions as $item1) {
                    $res['regions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceMode) {
            $res['resourceMode'] = $this->resourceMode;
        }

        if (null !== $this->resourceTags) {
            if (\is_array($this->resourceTags)) {
                $res['resourceTags'] = [];
                foreach ($this->resourceTags as $key1 => $value1) {
                    $res['resourceTags'][$key1] = $value1;
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
        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['instanceIds'] as $item1) {
                    $model->instanceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['regions'])) {
            if (!empty($map['regions'])) {
                $model->regions = [];
                $n1 = 0;
                foreach ($map['regions'] as $item1) {
                    $model->regions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['resourceMode'])) {
            $model->resourceMode = $map['resourceMode'];
        }

        if (isset($map['resourceTags'])) {
            if (!empty($map['resourceTags'])) {
                $model->resourceTags = [];
                foreach ($map['resourceTags'] as $key1 => $value1) {
                    $model->resourceTags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
