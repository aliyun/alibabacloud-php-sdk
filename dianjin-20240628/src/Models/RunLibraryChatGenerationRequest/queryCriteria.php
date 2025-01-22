<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\queryCriteria\and_;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\queryCriteria\or_;

class queryCriteria extends Model
{
    /**
     * @var and_[]
     */
    public $and;
    /**
     * @var or_[]
     */
    public $or;
    protected $_name = [
        'and' => 'and',
        'or'  => 'or',
    ];

    public function validate()
    {
        if (\is_array($this->and)) {
            Model::validateArray($this->and);
        }
        if (\is_array($this->or)) {
            Model::validateArray($this->or);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->and) {
            if (\is_array($this->and)) {
                $res['and'] = [];
                $n1         = 0;
                foreach ($this->and as $item1) {
                    $res['and'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->or) {
            if (\is_array($this->or)) {
                $res['or'] = [];
                $n1        = 0;
                foreach ($this->or as $item1) {
                    $res['or'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['and'])) {
            if (!empty($map['and'])) {
                $model->and = [];
                $n1         = 0;
                foreach ($map['and'] as $item1) {
                    $model->and[$n1++] = and_::fromMap($item1);
                }
            }
        }

        if (isset($map['or'])) {
            if (!empty($map['or'])) {
                $model->or = [];
                $n1        = 0;
                foreach ($map['or'] as $item1) {
                    $model->or[$n1++] = or_::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
