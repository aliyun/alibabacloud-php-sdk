<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;

class UpdateTaskWorkforceRequest extends Model
{
    /**
     * @var SimpleWorkforce[]
     */
    public $workforce;
    protected $_name = [
        'workforce' => 'Workforce',
    ];

    public function validate()
    {
        if (\is_array($this->workforce)) {
            Model::validateArray($this->workforce);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->workforce) {
            if (\is_array($this->workforce)) {
                $res['Workforce'] = [];
                $n1 = 0;
                foreach ($this->workforce as $item1) {
                    $res['Workforce'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Workforce'])) {
            if (!empty($map['Workforce'])) {
                $model->workforce = [];
                $n1 = 0;
                foreach ($map['Workforce'] as $item1) {
                    $model->workforce[$n1] = SimpleWorkforce::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
