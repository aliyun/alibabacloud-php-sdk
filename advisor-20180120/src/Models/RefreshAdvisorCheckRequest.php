<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Advisor\V20180120\Models\RefreshAdvisorCheckRequest\resourceDimensionList;

class RefreshAdvisorCheckRequest extends Model
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
     * @var resourceDimensionList[]
     */
    public $resourceDimensionList;

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
        'resourceDimensionList' => 'ResourceDimensionList',
        'resourceId' => 'ResourceId',
        'token' => 'Token',
    ];

    public function validate()
    {
        if (\is_array($this->resourceDimensionList)) {
            Model::validateArray($this->resourceDimensionList);
        }
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

        if (null !== $this->resourceDimensionList) {
            if (\is_array($this->resourceDimensionList)) {
                $res['ResourceDimensionList'] = [];
                $n1 = 0;
                foreach ($this->resourceDimensionList as $item1) {
                    $res['ResourceDimensionList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
            if (!empty($map['ResourceDimensionList'])) {
                $model->resourceDimensionList = [];
                $n1 = 0;
                foreach ($map['ResourceDimensionList'] as $item1) {
                    $model->resourceDimensionList[$n1++] = resourceDimensionList::fromMap($item1);
                }
            }
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
