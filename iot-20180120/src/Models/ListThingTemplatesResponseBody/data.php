<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListThingTemplatesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example lighting
     *
     * @var string
     */
    public $categoryKey;

    /**
     * @var string
     */
    public $categoryName;
    protected $_name = [
        'categoryKey'  => 'CategoryKey',
        'categoryName' => 'CategoryName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryKey) {
            $res['CategoryKey'] = $this->categoryKey;
        }
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryKey'])) {
            $model->categoryKey = $map['CategoryKey'];
        }
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        return $model;
    }
}
