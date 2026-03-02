<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class SearchAssetsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $assetIndustrysShrink;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string
     */
    public $assetTypesShrink;

    /**
     * @var int
     */
    public $companyId;

    /**
     * @var int
     */
    public $marketId;

    /**
     * @var string
     */
    public $orderBy;

    /**
     * @var string
     */
    public $orderDirection;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'assetIndustrysShrink' => 'assetIndustrys',
        'assetName' => 'assetName',
        'assetTypesShrink' => 'assetTypes',
        'companyId' => 'companyId',
        'marketId' => 'marketId',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetIndustrysShrink) {
            $res['assetIndustrys'] = $this->assetIndustrysShrink;
        }

        if (null !== $this->assetName) {
            $res['assetName'] = $this->assetName;
        }

        if (null !== $this->assetTypesShrink) {
            $res['assetTypes'] = $this->assetTypesShrink;
        }

        if (null !== $this->companyId) {
            $res['companyId'] = $this->companyId;
        }

        if (null !== $this->marketId) {
            $res['marketId'] = $this->marketId;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
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
        if (isset($map['assetIndustrys'])) {
            $model->assetIndustrysShrink = $map['assetIndustrys'];
        }

        if (isset($map['assetName'])) {
            $model->assetName = $map['assetName'];
        }

        if (isset($map['assetTypes'])) {
            $model->assetTypesShrink = $map['assetTypes'];
        }

        if (isset($map['companyId'])) {
            $model->companyId = $map['companyId'];
        }

        if (isset($map['marketId'])) {
            $model->marketId = $map['marketId'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        return $model;
    }
}
