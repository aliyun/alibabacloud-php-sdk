<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class DescribeRegionsRequest extends Model
{
    /**
     * @description Specifies whether to return detailed information. Default value: false.
     *
     * @example false
     *
     * @var bool
     */
    public $needVaultCount;
    protected $_name = [
        'needVaultCount' => 'NeedVaultCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->needVaultCount) {
            $res['NeedVaultCount'] = $this->needVaultCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRegionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NeedVaultCount'])) {
            $model->needVaultCount = $map['NeedVaultCount'];
        }

        return $model;
    }
}
