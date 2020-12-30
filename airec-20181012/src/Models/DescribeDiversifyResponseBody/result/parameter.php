<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models\DescribeDiversifyResponseBody\result;

use AlibabaCloud\Tea\Model;

class parameter extends Model
{
    /**
     * @var int
     */
    public $window;

    /**
     * @var int
     */
    public $categoryIndex;
    protected $_name = [
        'window'        => 'Window',
        'categoryIndex' => 'CategoryIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->window) {
            $res['Window'] = $this->window;
        }
        if (null !== $this->categoryIndex) {
            $res['CategoryIndex'] = $this->categoryIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parameter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Window'])) {
            $model->window = $map['Window'];
        }
        if (isset($map['CategoryIndex'])) {
            $model->categoryIndex = $map['CategoryIndex'];
        }

        return $model;
    }
}
