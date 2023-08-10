<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\ListFunctionInstancesResponseBody\result;

use AlibabaCloud\Tea\Model;

class belongs extends Model
{
    /**
     * @description The category.
     *
     * @example "general"
     *
     * @var string
     */
    public $category;

    /**
     * @description The industry.
     *
     * @example "ecommerce"
     *
     * @var string
     */
    public $domain;

    /**
     * @description The abbreviation of the language that applies.
     *
     * @example "zh"
     *
     * @var string
     */
    public $language;
    protected $_name = [
        'category' => 'Category',
        'domain'   => 'Domain',
        'language' => 'Language',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return belongs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        return $model;
    }
}
