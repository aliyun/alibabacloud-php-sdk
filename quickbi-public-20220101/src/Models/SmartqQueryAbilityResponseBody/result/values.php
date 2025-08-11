<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models\SmartqQueryAbilityResponseBody\result;

use AlibabaCloud\Dara\Model;

class values extends Model
{
    /**
     * @var string[]
     */
    public $row;
    protected $_name = [
        'row' => 'Row',
    ];

    public function validate()
    {
        if (\is_array($this->row)) {
            Model::validateArray($this->row);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->row) {
            if (\is_array($this->row)) {
                $res['Row'] = [];
                $n1 = 0;
                foreach ($this->row as $item1) {
                    $res['Row'][$n1] = $item1;
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
        if (isset($map['Row'])) {
            if (!empty($map['Row'])) {
                $model->row = [];
                $n1 = 0;
                foreach ($map['Row'] as $item1) {
                    $model->row[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
