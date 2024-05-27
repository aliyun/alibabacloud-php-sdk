<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceTagsRequest extends Model
{
    /**
     * @description The list of cluster IDs.
     *
     * @example ["ob3za5w73as8rk"]
     *
     * @var string
     */
    public $instanceIds;

    /**
     * @description The tags.
     *
     * @example [{"Key": "xxx", "Value", "xxx"},{}]
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'tags'        => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceIds'])) {
            $model->instanceIds = $map['InstanceIds'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
