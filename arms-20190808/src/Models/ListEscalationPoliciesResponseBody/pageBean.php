<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListEscalationPoliciesResponseBody\pageBean\escalationPolicies;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->escalationPolicies) {
            $res['EscalationPolicies'] = [];
            if (null !== $this->escalationPolicies && \is_array($this->escalationPolicies)) {
                $n = 0;
                foreach ($this->escalationPolicies as $item) {
                    $res['EscalationPolicies'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EscalationPolicies'])) {
            if (!empty($map['EscalationPolicies'])) {
                $model->escalationPolicies = [];
                $n                         = 0;
                foreach ($map['EscalationPolicies'] as $item) {
                    $model->escalationPolicies[$n++] = null !== $item ? escalationPolicies::fromMap($item) : $item;
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
