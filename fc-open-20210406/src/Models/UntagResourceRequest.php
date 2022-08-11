<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class UntagResourceRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @var string
     */
    public $resourceArn;

    /**
     * @var string[]
     */
    public $tagKeys;
    protected $_name = [
        'all'         => 'all',
        'resourceArn' => 'resourceArn',
        'tagKeys'     => 'tagKeys',
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
            $res['tagKeys'] = $this->tagKeys;
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
        if (isset($map['tagKeys'])) {
            if (!empty($map['tagKeys'])) {
                $model->tagKeys = $map['tagKeys'];
            }
        }

        return $model;
    }
}
