<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SearchImageByNameRequest extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $picName;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var int
     */
    public $num;

    /**
     * @var int
     */
    public $start;

    /**
     * @var string
     */
    public $filter;
    protected $_name = [
        'instanceName' => 'InstanceName',
        'productId'    => 'ProductId',
        'picName'      => 'PicName',
        'categoryId'   => 'CategoryId',
        'num'          => 'Num',
        'start'        => 'Start',
        'filter'       => 'Filter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->picName) {
            $res['PicName'] = $this->picName;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->num) {
            $res['Num'] = $this->num;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchImageByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['PicName'])) {
            $model->picName = $map['PicName'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Num'])) {
            $model->num = $map['Num'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        return $model;
    }
}
