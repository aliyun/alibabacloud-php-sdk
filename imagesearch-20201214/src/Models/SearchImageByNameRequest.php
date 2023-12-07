<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models;

use AlibabaCloud\Tea\Model;

class SearchImageByNameRequest extends Model
{
    /**
     * @description The category of the product. For more information, see [Category references](~~179184~~).
     *
     *   For product search: If a category is specified, the specified category prevails. If no category is specified, the system estimates and selects a category. The category selected by the system is included in the response.
     *   For generic search: The parameter value is set to 88888888 regardless of whether a category is specified.
     *
     * @example 88888888
     *
     * @var int
     */
    public $categoryId;

    /**
     * @description The filter conditions. int_attr supports the following operators: >, >=, <, <=, and =. str_attr supports the following operators: = and !=. You can set the logical operator between conditions to AND or OR.
     *
     * Examples:
     *
     *   int_attr>=100
     *   str_attr!="value1"
     *   int_attr=1000 AND str_attr="value1"
     *
     * @example int_attr>=100
     *
     * @var string
     */
    public $filter;

    /**
     * @description The name of the Image Search instance. The name can be up to 20 characters in length.
     *
     * @example demoinstance1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The number of images to return on each page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $num;

    /**
     * @description The name of the image.
     *
     * @example 2092061_1.jpg
     *
     * @var string
     */
    public $picName;

    /**
     * @description The ID of the product.
     *
     * @example 2092061_1
     *
     * @var string
     */
    public $productId;

    /**
     * @description The number of the image to return. Valid values: 0 to 499. Default value: 0.
     *
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
