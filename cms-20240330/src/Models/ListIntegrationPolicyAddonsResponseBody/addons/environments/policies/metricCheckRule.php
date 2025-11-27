<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyAddonsResponseBody\addons\environments\policies;

use AlibabaCloud\Dara\Model;

class metricCheckRule extends Model
{
    /**
     * @var string[]
     */
    public $promQl;
    protected $_name = [
        'promQl' => 'promQl',
    ];

    public function validate()
    {
        if (\is_array($this->promQl)) {
            Model::validateArray($this->promQl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->promQl) {
            if (\is_array($this->promQl)) {
                $res['promQl'] = [];
                $n1 = 0;
                foreach ($this->promQl as $item1) {
                    $res['promQl'][$n1] = $item1;
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
        if (isset($map['promQl'])) {
            if (!empty($map['promQl'])) {
                $model->promQl = [];
                $n1 = 0;
                foreach ($map['promQl'] as $item1) {
                    $model->promQl[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
