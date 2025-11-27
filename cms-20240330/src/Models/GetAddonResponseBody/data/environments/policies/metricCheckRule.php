<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonResponseBody\data\environments\policies;

use AlibabaCloud\Dara\Model;

class metricCheckRule extends Model
{
    /**
     * @var string[]
     */
    public $promQL;
    protected $_name = [
        'promQL' => 'promQL',
    ];

    public function validate()
    {
        if (\is_array($this->promQL)) {
            Model::validateArray($this->promQL);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promQL) {
            if (\is_array($this->promQL)) {
                $res['promQL'] = [];
                $n1 = 0;
                foreach ($this->promQL as $item1) {
                    $res['promQL'][$n1] = $item1;
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
        if (isset($map['promQL'])) {
            if (!empty($map['promQL'])) {
                $model->promQL = [];
                $n1 = 0;
                foreach ($map['promQL'] as $item1) {
                    $model->promQL[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
