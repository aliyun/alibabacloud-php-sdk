<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody\pageBean\silencePolicies;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @var int
     */
    public $page;

    /**
     * @var silencePolicies[]
     */
    public $silencePolicies;

    /**
     * @var int
     */
    public $size;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'page'            => 'Page',
        'silencePolicies' => 'SilencePolicies',
        'size'            => 'Size',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->silencePolicies) {
            $res['SilencePolicies'] = [];
            if (null !== $this->silencePolicies && \is_array($this->silencePolicies)) {
                $n = 0;
                foreach ($this->silencePolicies as $item) {
                    $res['SilencePolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['SilencePolicies'])) {
            if (!empty($map['SilencePolicies'])) {
                $model->silencePolicies = [];
                $n                      = 0;
                foreach ($map['SilencePolicies'] as $item) {
                    $model->silencePolicies[$n++] = null !== $item ? silencePolicies::fromMap($item) : $item;
                }
            }
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
