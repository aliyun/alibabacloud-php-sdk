<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList\DBAccount;

use AlibabaCloud\Dara\Model;

class promqlSelectNodes extends Model
{
    /**
     * @var string[]
     */
    public $promqlSelectNodes;
    protected $_name = [
        'promqlSelectNodes' => 'PromqlSelectNodes',
    ];

    public function validate()
    {
        if (\is_array($this->promqlSelectNodes)) {
            Model::validateArray($this->promqlSelectNodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promqlSelectNodes) {
            if (\is_array($this->promqlSelectNodes)) {
                $res['PromqlSelectNodes'] = [];
                $n1 = 0;
                foreach ($this->promqlSelectNodes as $item1) {
                    $res['PromqlSelectNodes'][$n1] = $item1;
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
        if (isset($map['PromqlSelectNodes'])) {
            if (!empty($map['PromqlSelectNodes'])) {
                $model->promqlSelectNodes = [];
                $n1 = 0;
                foreach ($map['PromqlSelectNodes'] as $item1) {
                    $model->promqlSelectNodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
