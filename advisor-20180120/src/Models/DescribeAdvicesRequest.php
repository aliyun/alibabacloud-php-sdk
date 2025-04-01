<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Advisor\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DescribeAdvicesRequest extends Model
{
    /**
     * @var int
     */
    public $adviceId;

    /**
     * @var string
     */
    public $checkId;

    /**
     * @var int
     */
    public $checkPlanId;

    /**
     * @var int
     */
    public $excludeAdviceId;

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
    public $resourceId;
    protected $_name = [
        'adviceId' => 'AdviceId',
        'checkId' => 'CheckId',
        'checkPlanId' => 'CheckPlanId',
        'excludeAdviceId' => 'ExcludeAdviceId',
        'language' => 'Language',
        'product' => 'Product',
        'resourceId' => 'ResourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adviceId) {
            $res['AdviceId'] = $this->adviceId;
        }

        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }

        if (null !== $this->checkPlanId) {
            $res['CheckPlanId'] = $this->checkPlanId;
        }

        if (null !== $this->excludeAdviceId) {
            $res['ExcludeAdviceId'] = $this->excludeAdviceId;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->product) {
            $res['Product'] = $this->product;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['AdviceId'])) {
            $model->adviceId = $map['AdviceId'];
        }

        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }

        if (isset($map['CheckPlanId'])) {
            $model->checkPlanId = $map['CheckPlanId'];
        }

        if (isset($map['ExcludeAdviceId'])) {
            $model->excludeAdviceId = $map['ExcludeAdviceId'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['Product'])) {
            $model->product = $map['Product'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
