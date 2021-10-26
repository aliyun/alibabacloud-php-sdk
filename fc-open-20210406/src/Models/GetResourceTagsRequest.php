<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\Tea\Model;

class GetResourceTagsRequest extends Model
{
    /**
     * @description Resource ARN 全称或者简称
     *
     * @var string
     */
    public $resourceArn;
    protected $_name = [
        'resourceArn' => 'resourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceArn) {
            $res['resourceArn'] = $this->resourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetResourceTagsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['resourceArn'])) {
            $model->resourceArn = $map['resourceArn'];
        }

        return $model;
    }
}
