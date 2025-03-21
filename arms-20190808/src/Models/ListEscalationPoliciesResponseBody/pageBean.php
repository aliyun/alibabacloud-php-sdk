<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesResponseBody\pageBean\escalationPolicies;

class pageBean extends Model
{
    /**
     * @var escalationPolicies[]
     */
    public $escalationPolicies;
    /**
     * @var int
     */
    public $page;
    /**
     * @var int
     */
    public $size;
    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'escalationPolicies' => 'EscalationPolicies',
        'page'               => 'Page',
        'size'               => 'Size',
        'total'              => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->escalationPolicies)) {
            Model::validateArray($this->escalationPolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->escalationPolicies) {
            if (\is_array($this->escalationPolicies)) {
                $res['EscalationPolicies'] = [];
                $n1                        = 0;
                foreach ($this->escalationPolicies as $item1) {
                    $res['EscalationPolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
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
        if (isset($map['EscalationPolicies'])) {
            if (!empty($map['EscalationPolicies'])) {
                $model->escalationPolicies = [];
                $n1                        = 0;
                foreach ($map['EscalationPolicies'] as $item1) {
                    $model->escalationPolicies[$n1++] = escalationPolicies::fromMap($item1);
                }
            }
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
