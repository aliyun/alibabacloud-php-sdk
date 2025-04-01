<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class RefreshAdvisorCheckShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $assumeAliyunId;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var int
     */
    public $checkPlanId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $product;

    /**
     * @var string
     */
    public $resourceDimensionListShrink;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'assumeAliyunId' => 'AssumeAliyunId',
        'checkId' => 'CheckId',
        'checkPlanId' => 'CheckPlanId',
        'language' => 'Language',
        'product' => 'Product',
        'resourceDimensionListShrink' => 'ResourceDimensionList',
        'resourceId' => 'ResourceId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assumeAliyunId) {
            $res['AssumeAliyunId'] = $this->assumeAliyunId;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkPlanId) {
            $res['CheckPlanId'] = $this->checkPlanId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->resourceDimensionListShrink) {
            $res['ResourceDimensionList'] = $this->resourceDimensionListShrink;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['AssumeAliyunId'])) {
            $model->assumeAliyunId = $map['AssumeAliyunId'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckPlanId'])) {
            $model->checkPlanId = $map['CheckPlanId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['ResourceDimensionList'])) {
            $model->resourceDimensionListShrink = $map['ResourceDimensionList'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
