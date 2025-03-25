<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageprocess\V20200320\Models\DetectLymphResponseBody\data\lesions;

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
        if (\is_array($this->lesions)) {
            Model::validateArray($this->lesions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lesions) {
            if (\is_array($this->lesions)) {
                $res['Lesions'] = [];
                $n1 = 0;
                foreach ($this->lesions as $item1) {
                    $res['Lesions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Lesions'])) {
            if (!empty($map['Lesions'])) {
                $model->lesions = [];
                $n1 = 0;
                foreach ($map['Lesions'] as $item1) {
                    $model->lesions[$n1++] = lesions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
