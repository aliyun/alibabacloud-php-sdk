<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DistributionProduct extends Model
{
    /**
     * @var string
     */
    public $categoryChain;
    /**
     * @var int
     */
    public $categoryLeafId;
    /**
     * @var string
     */
    public $categoryLeafName;
    /**
     * @var string
     */
    public $channelCode;
    /**
     * @var string
     */
    public $distributeStatus;
    /**
     * @var string
     */
    public $picUrl;
    /**
     * @var string
     */
    public $productId;
    /**
     * @var string
     */
    public $sellerId;
    /**
     * @var string
     */
    public $shortTitle;
    /**
     * @var DistributionSku[]
     */
    public $skus;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $whiteBackgroundPicUrl;
    protected $_name = [
        'categoryChain'         => 'categoryChain',
        'categoryLeafId'        => 'categoryLeafId',
        'categoryLeafName'      => 'categoryLeafName',
        'channelCode'           => 'channelCode',
        'distributeStatus'      => 'distributeStatus',
        'picUrl'                => 'picUrl',
        'productId'             => 'productId',
        'sellerId'              => 'sellerId',
        'shortTitle'            => 'shortTitle',
        'skus'                  => 'skus',
        'title'                 => 'title',
        'whiteBackgroundPicUrl' => 'whiteBackgroundPicUrl',
    ];

    public function validate()
    {
        if (\is_array($this->skus)) {
            Model::validateArray($this->skus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryChain) {
            $res['categoryChain'] = $this->categoryChain;
        }

        if (null !== $this->categoryLeafId) {
            $res['categoryLeafId'] = $this->categoryLeafId;
        }

        if (null !== $this->categoryLeafName) {
            $res['categoryLeafName'] = $this->categoryLeafName;
        }

        if (null !== $this->channelCode) {
            $res['channelCode'] = $this->channelCode;
        }

        if (null !== $this->distributeStatus) {
            $res['distributeStatus'] = $this->distributeStatus;
        }

        if (null !== $this->picUrl) {
            $res['picUrl'] = $this->picUrl;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->sellerId) {
            $res['sellerId'] = $this->sellerId;
        }

        if (null !== $this->shortTitle) {
            $res['shortTitle'] = $this->shortTitle;
        }

        if (null !== $this->skus) {
            if (\is_array($this->skus)) {
                $res['skus'] = [];
                $n1          = 0;
                foreach ($this->skus as $item1) {
                    $res['skus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->whiteBackgroundPicUrl) {
            $res['whiteBackgroundPicUrl'] = $this->whiteBackgroundPicUrl;
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
        if (isset($map['categoryChain'])) {
            $model->categoryChain = $map['categoryChain'];
        }

        if (isset($map['categoryLeafId'])) {
            $model->categoryLeafId = $map['categoryLeafId'];
        }

        if (isset($map['categoryLeafName'])) {
            $model->categoryLeafName = $map['categoryLeafName'];
        }

        if (isset($map['channelCode'])) {
            $model->channelCode = $map['channelCode'];
        }

        if (isset($map['distributeStatus'])) {
            $model->distributeStatus = $map['distributeStatus'];
        }

        if (isset($map['picUrl'])) {
            $model->picUrl = $map['picUrl'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['sellerId'])) {
            $model->sellerId = $map['sellerId'];
        }

        if (isset($map['shortTitle'])) {
            $model->shortTitle = $map['shortTitle'];
        }

        if (isset($map['skus'])) {
            if (!empty($map['skus'])) {
                $model->skus = [];
                $n1          = 0;
                foreach ($map['skus'] as $item1) {
                    $model->skus[$n1++] = DistributionSku::fromMap($item1);
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['whiteBackgroundPicUrl'])) {
            $model->whiteBackgroundPicUrl = $map['whiteBackgroundPicUrl'];
        }

        return $model;
    }
}
