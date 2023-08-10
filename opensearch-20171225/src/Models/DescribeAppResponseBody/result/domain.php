<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\domain\functions;
use AlibabaCloud\Tea\Model;

class domain extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $category;

    /**
     * @example {}
     *
     * @var functions
     */
    public $functions;

    /**
     * @example test
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'category'  => 'category',
        'functions' => 'functions',
        'name'      => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }
        if (null !== $this->functions) {
            $res['functions'] = null !== $this->functions ? $this->functions->toMap() : null;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domain
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }
        if (isset($map['functions'])) {
            $model->functions = functions::fromMap($map['functions']);
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
