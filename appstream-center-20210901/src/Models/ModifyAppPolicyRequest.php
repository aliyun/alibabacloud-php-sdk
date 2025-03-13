<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest\videoPolicy;
use AlibabaCloud\Tea\Model;

class ModifyAppPolicyRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example pg-ee2znjktwgxu2****
     *
     * @var string
     */
    public $appPolicyId;

    /**
     * @description This parameter is required.
     *
     * @example CloudApp
     *
     * @var string
     */
    public $productType;

    /**
     * @var videoPolicy
     */
    public $videoPolicy;
    protected $_name = [
        'appPolicyId' => 'AppPolicyId',
        'productType' => 'ProductType',
        'videoPolicy' => 'VideoPolicy',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appPolicyId) {
            $res['AppPolicyId'] = $this->appPolicyId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->videoPolicy) {
            $res['VideoPolicy'] = null !== $this->videoPolicy ? $this->videoPolicy->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppPolicyId'])) {
            $model->appPolicyId = $map['AppPolicyId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['VideoPolicy'])) {
            $model->videoPolicy = videoPolicy::fromMap($map['VideoPolicy']);
        }

        return $model;
    }
}
