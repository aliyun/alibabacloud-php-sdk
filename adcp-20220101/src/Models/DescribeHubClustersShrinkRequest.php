<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DescribeHubClustersShrinkRequest extends Model
{
    /**
     * @description The configurations of the cluster.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The resource group ID.
     *
     * @example rg-aekz77rhypeu***
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $tagShrink;
    protected $_name = [
        'profile'         => 'Profile',
        'resourceGroupId' => 'ResourceGroupId',
        'tagShrink'       => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tagShrink) {
            $res['Tag'] = $this->tagShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHubClustersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            $model->tagShrink = $map['Tag'];
        }

        return $model;
    }
}
