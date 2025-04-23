<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class RefreshAdvisorCostCheckShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assumeAliyunIdListShrink;

    /**
     * @var string
     */
    public $checkIdsShrink;

    /**
     * @var int
     */
    public $checkPlanId;

    /**
     * @var string
     */
    public $product;

    /**
     * @var bool
     */
    public $refreshResource;

    /**
     * @var string
     */
    public $resourceIdsShrink;
    protected $_name = [
        'assumeAliyunIdListShrink' => 'AssumeAliyunIdList',
        'checkIdsShrink' => 'CheckIds',
        'checkPlanId' => 'CheckPlanId',
        'product' => 'Product',
        'refreshResource' => 'RefreshResource',
        'resourceIdsShrink' => 'ResourceIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunIdListShrink) {
            $res['AssumeAliyunIdList'] = $this->assumeAliyunIdListShrink;
        }

        if (null !== $this->checkIdsShrink) {
            $res['CheckIds'] = $this->checkIdsShrink;
        }

        if (null !== $this->checkPlanId) {
            $res['CheckPlanId'] = $this->checkPlanId;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->refreshResource) {
            $res['RefreshResource'] = $this->refreshResource;
        }

        if (null !== $this->resourceIdsShrink) {
            $res['ResourceIds'] = $this->resourceIdsShrink;
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
        if (isset($map['AssumeAliyunIdList'])) {
            $model->assumeAliyunIdListShrink = $map['AssumeAliyunIdList'];
        }

        if (isset($map['CheckIds'])) {
            $model->checkIdsShrink = $map['CheckIds'];
        }

        if (isset($map['CheckPlanId'])) {
            $model->checkPlanId = $map['CheckPlanId'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['RefreshResource'])) {
            $model->refreshResource = $map['RefreshResource'];
        }

        if (isset($map['ResourceIds'])) {
            $model->resourceIdsShrink = $map['ResourceIds'];
        }

        return $model;
    }
}
