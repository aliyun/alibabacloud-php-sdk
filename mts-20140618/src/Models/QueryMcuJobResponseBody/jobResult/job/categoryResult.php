<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMcuJobResponseBody\jobResult\job\categoryResult\categories;
use AlibabaCloud\Tea\Model;

class categoryResult extends Model
{
    /**
     * @var categories
     */
    public $categories;

    /**
     * @var string
     */
    public $details;
    protected $_name = [
        'categories' => 'Categories',
        'details'    => 'Details',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categories) {
            $res['Categories'] = null !== $this->categories ? $this->categories->toMap() : null;
        }
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return categoryResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Categories'])) {
            $model->categories = categories::fromMap($map['Categories']);
        }
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        return $model;
    }
}
