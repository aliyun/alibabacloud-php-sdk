<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models\DescribeDataAgentSessionResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataSources extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'category' => 'Category',
        'detail' => 'Detail',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
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
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
