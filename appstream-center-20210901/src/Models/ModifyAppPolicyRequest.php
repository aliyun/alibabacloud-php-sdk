<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyAppPolicyRequest\videoPolicy;

class ModifyAppPolicyRequest extends Model
{
    /**
     * @var string
     */
    public $appPolicyId;
    /**
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
        if (null !== $this->videoPolicy) {
            $this->videoPolicy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appPolicyId) {
            $res['AppPolicyId'] = $this->appPolicyId;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->videoPolicy) {
            $res['VideoPolicy'] = null !== $this->videoPolicy ? $this->videoPolicy->toArray($noStream) : $this->videoPolicy;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
