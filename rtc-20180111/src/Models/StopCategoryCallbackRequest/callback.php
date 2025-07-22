<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StopCategoryCallbackRequest;

use AlibabaCloud\Tea\Model;

class callback extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example RecordEvent
     *
     * @var string
     */
    public $category;
    protected $_name = [
        'category' => 'Category',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return callable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
