<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Dara\Model;

class SearchImageByNameRequest extends Model
{
    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var bool
     */
    public $distinctProductId;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $num;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $scoreThreshold;

    /**
     * @var int
     */
    public $start;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'distinctProductId' => 'DistinctProductId',
        'filter' => 'Filter',
        'instanceName' => 'InstanceName',
        'num' => 'Num',
        'picName' => 'PicName',
        'productId' => 'ProductId',
        'scoreThreshold' => 'ScoreThreshold',
        'start' => 'Start',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->distinctProductId) {
            $res['DistinctProductId'] = $this->distinctProductId;
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }

        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->scoreThreshold) {
            $res['ScoreThreshold'] = $this->scoreThreshold;
        }

        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['DistinctProductId'])) {
            $model->distinctProductId = $map['DistinctProductId'];
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }

        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ScoreThreshold'])) {
            $model->scoreThreshold = $map['ScoreThreshold'];
        }

        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
