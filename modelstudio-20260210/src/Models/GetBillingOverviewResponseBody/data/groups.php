<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetBillingOverviewResponseBody\data;

use AlibabaCloud\Dara\Model;

class groups extends Model
{
    /**
     * @var string
     */
    public $amount;

    /**
     * @var string[]
     */
    public $articleCodes;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $percentage;
    protected $_name = [
        'amount' => 'amount',
        'articleCodes' => 'articleCodes',
        'key' => 'key',
        'name' => 'name',
        'percentage' => 'percentage',
    ];

    public function validate()
    {
        if (\is_array($this->articleCodes)) {
            Model::validateArray($this->articleCodes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->amount) {
            $res['amount'] = $this->amount;
        }

        if (null !== $this->articleCodes) {
            if (\is_array($this->articleCodes)) {
                $res['articleCodes'] = [];
                $n1 = 0;
                foreach ($this->articleCodes as $item1) {
                    $res['articleCodes'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->key) {
            $res['key'] = $this->key;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->percentage) {
            $res['percentage'] = $this->percentage;
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
        if (isset($map['amount'])) {
            $model->amount = $map['amount'];
        }

        if (isset($map['articleCodes'])) {
            if (!empty($map['articleCodes'])) {
                $model->articleCodes = [];
                $n1 = 0;
                foreach ($map['articleCodes'] as $item1) {
                    $model->articleCodes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['percentage'])) {
            $model->percentage = $map['percentage'];
        }

        return $model;
    }
}
