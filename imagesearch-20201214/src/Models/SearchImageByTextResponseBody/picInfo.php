<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByTextResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ImageSearch\V20201214\Models\SearchImageByTextResponseBody\picInfo\allCategories;

class picInfo extends Model
{
    /**
     * @var allCategories[]
     */
    public $allCategories;
    protected $_name = [
        'allCategories' => 'AllCategories',
    ];

    public function validate()
    {
        if (\is_array($this->allCategories)) {
            Model::validateArray($this->allCategories);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allCategories) {
            if (\is_array($this->allCategories)) {
                $res['AllCategories'] = [];
                $n1 = 0;
                foreach ($this->allCategories as $item1) {
                    $res['AllCategories'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['AllCategories'])) {
            if (!empty($map['AllCategories'])) {
                $model->allCategories = [];
                $n1 = 0;
                foreach ($map['AllCategories'] as $item1) {
                    $model->allCategories[$n1] = allCategories::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
