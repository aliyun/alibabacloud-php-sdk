<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListSilencePoliciesResponseBody\pageBean\silencePolicies;

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
        if (\is_array($this->silencePolicies)) {
            Model::validateArray($this->silencePolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->silencePolicies) {
            if (\is_array($this->silencePolicies)) {
                $res['SilencePolicies'] = [];
                $n1                     = 0;
                foreach ($this->silencePolicies as $item1) {
                    $res['SilencePolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['SilencePolicies'])) {
            if (!empty($map['SilencePolicies'])) {
                $model->silencePolicies = [];
                $n1                     = 0;
                foreach ($map['SilencePolicies'] as $item1) {
                    $model->silencePolicies[$n1++] = silencePolicies::fromMap($item1);
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
