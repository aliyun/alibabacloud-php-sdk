<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ListClusterChecksResponseBody\checks;

class ListClusterChecksResponseBody extends Model
{
    /**
     * @var checks[]
     */
    public $checks;
    protected $_name = [
        'checks' => 'checks',
    ];

    public function validate()
    {
        if (\is_array($this->checks)) {
            Model::validateArray($this->checks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checks) {
            if (\is_array($this->checks)) {
                $res['checks'] = [];
                $n1            = 0;
                foreach ($this->checks as $item1) {
                    $res['checks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['checks'])) {
            if (!empty($map['checks'])) {
                $model->checks = [];
                $n1            = 0;
                foreach ($map['checks'] as $item1) {
                    $model->checks[$n1++] = checks::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
