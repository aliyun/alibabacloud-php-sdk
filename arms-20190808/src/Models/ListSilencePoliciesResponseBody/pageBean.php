<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody\pageBean\silencePolicies;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description The name of the silence policy.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of silence policies that were returned.
     *
     * @var silencePolicies[]
     */
    public $silencePolicies;

    /**
     * @description The number of entries that were returned on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description An array of matching rule objects.
     *
     * @example 1
     *
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
