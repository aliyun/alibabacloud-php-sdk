<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BDRC\V20230808\Models;

use AlibabaCloud\Tea\Model;

class DisableCheckResourceRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example acs:ecs:123***890:cn-shanghai:instance/i-001***90
     *
     * @var string
     */
    public $resourceArn;
    protected $_name = [
        'resourceArn' => 'ResourceArn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceArn) {
            $res['ResourceArn'] = $this->resourceArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableCheckResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceArn'])) {
            $model->resourceArn = $map['ResourceArn'];
        }

        return $model;
    }
}
