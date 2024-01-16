<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryGbSubDeviceListResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryGbSubDeviceListResponseBody\data\gbSubDeviceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var gbSubDeviceList[]
     */
    public $gbSubDeviceList;

    /**
     * @var int
     */
    public $total;
    protected $_name = [
        'gbSubDeviceList' => 'GbSubDeviceList',
        'total'           => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbSubDeviceList) {
            $res['GbSubDeviceList'] = [];
            if (null !== $this->gbSubDeviceList && \is_array($this->gbSubDeviceList)) {
                $n = 0;
                foreach ($this->gbSubDeviceList as $item) {
                    $res['GbSubDeviceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GbSubDeviceList'])) {
            if (!empty($map['GbSubDeviceList'])) {
                $model->gbSubDeviceList = [];
                $n                      = 0;
                foreach ($map['GbSubDeviceList'] as $item) {
                    $model->gbSubDeviceList[$n++] = null !== $item ? gbSubDeviceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
