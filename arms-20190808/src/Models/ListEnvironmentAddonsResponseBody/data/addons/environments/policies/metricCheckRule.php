<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAddonsResponseBody\data\addons\environments\policies;

use AlibabaCloud\Dara\Model;

class metricCheckRule extends Model
{
    /**
     * @var string[]
     */
    public $promQL;
    protected $_name = [
        'promQL' => 'PromQL',
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
                $res['PromQL'] = [];
                $n1            = 0;
                foreach ($this->promQL as $item1) {
                    $res['PromQL'][$n1++] = $item1;
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
        if (isset($map['PromQL'])) {
            if (!empty($map['PromQL'])) {
                $model->promQL = [];
                $n1            = 0;
                foreach ($map['PromQL'] as $item1) {
                    $model->promQL[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
