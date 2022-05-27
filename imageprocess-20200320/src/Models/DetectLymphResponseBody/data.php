<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphResponseBody;

use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphResponseBody\data\lesions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var lesions[]
     */
    public $lesions;
    protected $_name = [
        'lesions' => 'Lesions',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lesions) {
            $res['Lesions'] = [];
            if (null !== $this->lesions && \is_array($this->lesions)) {
                $n = 0;
                foreach ($this->lesions as $item) {
                    $res['Lesions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Lesions'])) {
            if (!empty($map['Lesions'])) {
                $model->lesions = [];
                $n              = 0;
                foreach ($map['Lesions'] as $item) {
                    $model->lesions[$n++] = null !== $item ? lesions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
