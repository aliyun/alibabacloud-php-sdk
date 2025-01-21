<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean\alertContactGroups;

class pageBean extends Model
{
    /**
     * @var alertContactGroups[]
     */
    public $alertContactGroups;
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
        'alertContactGroups' => 'AlertContactGroups',
        'page'               => 'Page',
        'size'               => 'Size',
        'total'              => 'Total',
    ];

    public function validate()
    {
        if (\is_array($this->alertContactGroups)) {
            Model::validateArray($this->alertContactGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alertContactGroups) {
            if (\is_array($this->alertContactGroups)) {
                $res['AlertContactGroups'] = [];
                $n1                        = 0;
                foreach ($this->alertContactGroups as $item1) {
                    $res['AlertContactGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AlertContactGroups'])) {
            if (!empty($map['AlertContactGroups'])) {
                $model->alertContactGroups = [];
                $n1                        = 0;
                foreach ($map['AlertContactGroups'] as $item1) {
                    $model->alertContactGroups[$n1++] = alertContactGroups::fromMap($item1);
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
