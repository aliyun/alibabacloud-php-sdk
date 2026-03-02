<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class SearchAssetsRequest extends Model
{
    /**
     * @var string[]
     */
    public $assetIndustrys;

    /**
     * @var string
     */
    public $assetName;

    /**
     * @var string[]
     */
    public $assetTypes;

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
        'assetIndustrys' => 'assetIndustrys',
        'assetName' => 'assetName',
        'assetTypes' => 'assetTypes',
        'companyId' => 'companyId',
        'marketId' => 'marketId',
        'orderBy' => 'orderBy',
        'orderDirection' => 'orderDirection',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
    ];

    public function validate()
    {
        if (\is_array($this->assetIndustrys)) {
            Model::validateArray($this->assetIndustrys);
        }
        if (\is_array($this->assetTypes)) {
            Model::validateArray($this->assetTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assetIndustrys) {
            if (\is_array($this->assetIndustrys)) {
                $res['assetIndustrys'] = [];
                $n1 = 0;
                foreach ($this->assetIndustrys as $item1) {
                    $res['assetIndustrys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->assetName) {
            $res['assetName'] = $this->assetName;
        }

        if (null !== $this->assetTypes) {
            if (\is_array($this->assetTypes)) {
                $res['assetTypes'] = [];
                $n1 = 0;
                foreach ($this->assetTypes as $item1) {
                    $res['assetTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['assetIndustrys'])) {
                $model->assetIndustrys = [];
                $n1 = 0;
                foreach ($map['assetIndustrys'] as $item1) {
                    $model->assetIndustrys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['assetName'])) {
            $model->assetName = $map['assetName'];
        }

        if (isset($map['assetTypes'])) {
            if (!empty($map['assetTypes'])) {
                $model->assetTypes = [];
                $n1 = 0;
                foreach ($map['assetTypes'] as $item1) {
                    $model->assetTypes[$n1] = $item1;
                    ++$n1;
                }
            }
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
