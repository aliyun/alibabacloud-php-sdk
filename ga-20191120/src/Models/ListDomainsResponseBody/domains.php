<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ga\V20191120\Models\ListDomainsResponseBody\domains\accelerators;

class domains extends Model
{
    /**
     * @var accelerators[]
     */
    public $accelerators;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'accelerators' => 'Accelerators',
        'domain' => 'Domain',
        'state' => 'State',
    ];

    public function validate()
    {
        if (\is_array($this->accelerators)) {
            Model::validateArray($this->accelerators);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerators) {
            if (\is_array($this->accelerators)) {
                $res['Accelerators'] = [];
                $n1 = 0;
                foreach ($this->accelerators as $item1) {
                    $res['Accelerators'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = [];
                $n1 = 0;
                foreach ($map['Accelerators'] as $item1) {
                    $model->accelerators[$n1] = accelerators::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
