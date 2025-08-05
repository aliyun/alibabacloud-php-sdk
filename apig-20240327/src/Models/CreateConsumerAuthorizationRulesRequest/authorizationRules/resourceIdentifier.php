<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateConsumerAuthorizationRulesRequest\authorizationRules;

use AlibabaCloud\Dara\Model;

class resourceIdentifier extends Model
{
    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var string
     */
    public $parentResourceId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $resources;
    protected $_name = [
        'environmentId' => 'environmentId',
        'parentResourceId' => 'parentResourceId',
        'resourceId' => 'resourceId',
        'resources' => 'resources',
    ];

    public function validate()
    {
        if (\is_array($this->resources)) {
            Model::validateArray($this->resources);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->parentResourceId) {
            $res['parentResourceId'] = $this->parentResourceId;
        }

        if (null !== $this->resourceId) {
            $res['resourceId'] = $this->resourceId;
        }

        if (null !== $this->resources) {
            if (\is_array($this->resources)) {
                $res['resources'] = [];
                $n1 = 0;
                foreach ($this->resources as $item1) {
                    $res['resources'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['parentResourceId'])) {
            $model->parentResourceId = $map['parentResourceId'];
        }

        if (isset($map['resourceId'])) {
            $model->resourceId = $map['resourceId'];
        }

        if (isset($map['resources'])) {
            if (!empty($map['resources'])) {
                $model->resources = [];
                $n1 = 0;
                foreach ($map['resources'] as $item1) {
                    $model->resources[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
