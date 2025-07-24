<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Tea\Model;

class SearchCredits extends Model
{
    /**
     * @var int
     */
    public $genericTextSearch;
    protected $_name = [
        'genericTextSearch' => 'genericTextSearch',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->genericTextSearch) {
            $res['genericTextSearch'] = $this->genericTextSearch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchCredits
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['genericTextSearch'])) {
            $model->genericTextSearch = $map['genericTextSearch'];
        }

        return $model;
    }
}
