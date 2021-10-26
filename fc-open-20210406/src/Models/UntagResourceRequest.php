<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UntagResourceRequest extends Model
{
    /**
     * @description 删除所有 tag，默认值为 false
     *
     * @var bool
     */
    public $all;

    /**
     * @description 目前只能给 top level 资源 service 进行标签的相关操作, ARN 可以是类似 services/foo 或者 acs:fc:cn-shanghai:123456789:services/foo
     *
     * @var string
     */
    public $resourceArn;

    /**
     * @description tag key 值列表， 最大为 20，当 all=false， length 至少为 1. 当 length 大于 1 时， 可以忽略 all 值
     *
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all'         => 'all',
        'resourceArn' => 'resourceArn',
        'tagKeys'     => 'tagKeys	',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['all'] = $this->all;
        }
        if (null !== $this->resourceArn) {
            $res['resourceArn'] = $this->resourceArn;
        }
        if (null !== $this->tagKeys) {
            $res['tagKeys	'] = $this->tagKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UntagResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['all'])) {
            $model->all = $map['all'];
        }
        if (isset($map['resourceArn'])) {
            $model->resourceArn = $map['resourceArn'];
        }
        if (isset($map['tagKeys	'])) {
            if (!empty($map['tagKeys	'])) {
                $model->tagKeys = $map['tagKeys	'];
            }
        }

        return $model;
    }
}
