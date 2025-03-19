<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class TagResourceInput extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example acs:fc:cn-shanghai:xxx:functions/f1
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'resourceArn' => 'resourceArn',
        'tags' => 'tags',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return TagResourceInput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceArn'])) {
            $model->resourceArn = $map['resourceArn'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
