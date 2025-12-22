<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppResponseBody\result\domain\functions;

class domain extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var functions
     */
    public $functions;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'category' => 'category',
        'functions' => 'functions',
        'name' => 'name',
    ];

    public function validate()
    {
        if (null !== $this->functions) {
            $this->functions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->functions) {
            $res['functions'] = null !== $this->functions ? $this->functions->toArray($noStream) : $this->functions;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
