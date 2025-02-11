<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models\DescribeProductResponseBody\shopInfo;

use AlibabaCloud\Dara\Model;

class telephones extends Model
{
    /**
     * @var string[]
     */
    public $telephone;
    protected $_name = [
        'telephone' => 'Telephone',
    ];

    public function validate()
    {
        if (\is_array($this->telephone)) {
            Model::validateArray($this->telephone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->telephone) {
            if (\is_array($this->telephone)) {
                $res['Telephone'] = [];
                $n1               = 0;
                foreach ($this->telephone as $item1) {
                    $res['Telephone'][$n1++] = $item1;
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
        if (isset($map['Telephone'])) {
            if (!empty($map['Telephone'])) {
                $model->telephone = [];
                $n1               = 0;
                foreach ($map['Telephone'] as $item1) {
                    $model->telephone[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
