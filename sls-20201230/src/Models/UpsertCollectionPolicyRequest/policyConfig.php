<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models\UpsertCollectionPolicyRequest;

use AlibabaCloud\Tea\Model;

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
     * @description This parameter is required.
     *
     * @example all
     *
     * @var string
     */
    public $resourceMode;

    /**
     * @var mixed[]
     */
    public $resourceTags;
    protected $_name = [
        'instanceIds'  => 'instanceIds',
        'regions'      => 'regions',
        'resourceMode' => 'resourceMode',
        'resourceTags' => 'resourceTags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['instanceIds'] = $this->instanceIds;
        }
        if (null !== $this->regions) {
            $res['regions'] = $this->regions;
        }
        if (null !== $this->resourceMode) {
            $res['resourceMode'] = $this->resourceMode;
        }
        if (null !== $this->resourceTags) {
            $res['resourceTags'] = $this->resourceTags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return policyConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['instanceIds'])) {
            if (!empty($map['instanceIds'])) {
                $model->instanceIds = $map['instanceIds'];
            }
        }
        if (isset($map['regions'])) {
            if (!empty($map['regions'])) {
                $model->regions = $map['regions'];
            }
        }
        if (isset($map['resourceMode'])) {
            $model->resourceMode = $map['resourceMode'];
        }
        if (isset($map['resourceTags'])) {
            $model->resourceTags = $map['resourceTags'];
        }

        return $model;
    }
}
