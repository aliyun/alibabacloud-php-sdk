<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTagsOutput extends Model
{
    /**
     * @example ALIYUN::FC::FUNCTION
     *
     * @var string
     */
    public $resouceType;

    /**
     * @example acs:fc:cn-shanghai:****:functions/demo
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'resouceType' => 'resouceType',
        'resourceArn' => 'resourceArn',
        'tags'        => 'tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resouceType) {
            $res['resouceType'] = $this->resouceType;
        }
        if (null !== $this->resourceArn) {
            $res['resourceArn'] = $this->resourceArn;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTagsOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resouceType'])) {
            $model->resouceType = $map['resouceType'];
        }
        if (isset($map['resourceArn'])) {
            $model->resourceArn = $map['resourceArn'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
