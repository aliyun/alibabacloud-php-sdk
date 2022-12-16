<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SearchImageByNameRequest extends Model
{
    /**
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @example int_attr>=100
     *
     * @var string
     */
    public $filter;

    /**
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example 10
     *
     * @var int
     */
    public $num;

    /**
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;

    /**
     * @example 0
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'categoryId'   => 'CategoryId',
        'filter'       => 'Filter',
        'instanceName' => 'InstanceName',
        'num'          => 'Num',
        'picName'      => 'PicName',
        'productId'    => 'ProductId',
        'start'        => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
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
        if (null !== $this->start) {
            $res['Start'] = $this->start;
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
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
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
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
