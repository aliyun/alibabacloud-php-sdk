<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsResponseBody\data;

use AlibabaCloud\SDK\Idrsservice\V20200630\Models\GetStatisticsResponseBody\data\items\detail;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $departmentName;

    /**
     * @var int
     */
    public $cloudCount;

    /**
     * @var string
     */
    public $month;

    /**
     * @var int
     */
    public $clientCount;

    /**
     * @var detail[]
     */
    public $detail;
    protected $_name = [
        'departmentName' => 'DepartmentName',
        'cloudCount'     => 'CloudCount',
        'month'          => 'Month',
        'clientCount'    => 'ClientCount',
        'detail'         => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->departmentName) {
            $res['DepartmentName'] = $this->departmentName;
        }
        if (null !== $this->cloudCount) {
            $res['CloudCount'] = $this->cloudCount;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->clientCount) {
            $res['ClientCount'] = $this->clientCount;
        }
        if (null !== $this->detail) {
            $res['Detail'] = [];
            if (null !== $this->detail && \is_array($this->detail)) {
                $n = 0;
                foreach ($this->detail as $item) {
                    $res['Detail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DepartmentName'])) {
            $model->departmentName = $map['DepartmentName'];
        }
        if (isset($map['CloudCount'])) {
            $model->cloudCount = $map['CloudCount'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['ClientCount'])) {
            $model->clientCount = $map['ClientCount'];
        }
        if (isset($map['Detail'])) {
            if (!empty($map['Detail'])) {
                $model->detail = [];
                $n             = 0;
                foreach ($map['Detail'] as $item) {
                    $model->detail[$n++] = null !== $item ? detail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
