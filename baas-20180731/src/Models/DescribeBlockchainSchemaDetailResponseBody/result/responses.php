<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaDetailResponseBody\result;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeBlockchainSchemaDetailResponseBody\result\responses\properties;
use AlibabaCloud\Tea\Model;

class responses extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var properties
     */
    public $properties;
    protected $_name = [
        'category'     => 'Category',
        'categoryName' => 'CategoryName',
        'description'  => 'Description',
        'properties'   => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->properties) {
            $res['Properties'] = null !== $this->properties ? $this->properties->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return responses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Properties'])) {
            $model->properties = properties::fromMap($map['Properties']);
        }

        return $model;
    }
}
