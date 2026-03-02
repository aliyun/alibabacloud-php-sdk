<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class SearchPbcAssetsRequest extends Model
{
    /**
     * @var string
     */
    public $industry;

    /**
     * @var string
     */
    public $keyword;

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

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'industry' => 'industry',
        'keyword' => 'keyword',
        'orderBy' => 'order_by',
        'orderDirection' => 'order_direction',
        'pageNumber' => 'page_number',
        'pageSize' => 'page_size',
        'type' => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->industry) {
            $res['industry'] = $this->industry;
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->orderBy) {
            $res['order_by'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['order_direction'] = $this->orderDirection;
        }

        if (null !== $this->pageNumber) {
            $res['page_number'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['page_size'] = $this->pageSize;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['industry'])) {
            $model->industry = $map['industry'];
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['order_by'])) {
            $model->orderBy = $map['order_by'];
        }

        if (isset($map['order_direction'])) {
            $model->orderDirection = $map['order_direction'];
        }

        if (isset($map['page_number'])) {
            $model->pageNumber = $map['page_number'];
        }

        if (isset($map['page_size'])) {
            $model->pageSize = $map['page_size'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
