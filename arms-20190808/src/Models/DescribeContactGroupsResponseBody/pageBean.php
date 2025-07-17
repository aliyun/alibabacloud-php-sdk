<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeContactGroupsResponseBody\pageBean\alertContactGroups;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
    /**
     * @description The name of the alert contact group.
     *
     * @var alertContactGroups[]
     */
    public $alertContactGroups;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description The number of alert contact groups displayed on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description The total number of alert contact groups.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'alertContactGroups' => 'AlertContactGroups',
        'page' => 'Page',
        'size' => 'Size',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertContactGroups) {
            $res['AlertContactGroups'] = [];
            if (null !== $this->alertContactGroups && \is_array($this->alertContactGroups)) {
                $n = 0;
                foreach ($this->alertContactGroups as $item) {
                    $res['AlertContactGroups'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['AlertContactGroups'])) {
            if (!empty($map['AlertContactGroups'])) {
                $model->alertContactGroups = [];
                $n = 0;
                foreach ($map['AlertContactGroups'] as $item) {
                    $model->alertContactGroups[$n++] = null !== $item ? alertContactGroups::fromMap($item) : $item;
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
