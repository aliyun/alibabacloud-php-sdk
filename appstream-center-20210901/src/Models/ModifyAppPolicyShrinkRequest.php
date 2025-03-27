<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ModifyAppPolicyShrinkRequest extends Model
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
     * @var string
     */
    public $videoPolicyShrink;
    protected $_name = [
        'appPolicyId' => 'AppPolicyId',
        'productType' => 'ProductType',
        'videoPolicyShrink' => 'VideoPolicy',
    ];

    public function validate()
    {
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

        if (null !== $this->videoPolicyShrink) {
            $res['VideoPolicy'] = $this->videoPolicyShrink;
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
            $model->videoPolicyShrink = $map['VideoPolicy'];
        }

        return $model;
    }
}
