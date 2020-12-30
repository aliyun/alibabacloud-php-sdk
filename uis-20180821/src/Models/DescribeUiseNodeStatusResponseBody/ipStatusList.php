<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUiseNodeStatusResponseBody;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUiseNodeStatusResponseBody\ipStatusList\ipStatus;
use AlibabaCloud\Tea\Model;

class ipStatusList extends Model
{
    /**
     * @var ipStatus[]
     */
    public $ipStatus;
    protected $_name = [
        'ipStatus' => 'IpStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipStatus) {
            $res['IpStatus'] = [];
            if (null !== $this->ipStatus && \is_array($this->ipStatus)) {
                $n = 0;
                foreach ($this->ipStatus as $item) {
                    $res['IpStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ipStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpStatus'])) {
            if (!empty($map['IpStatus'])) {
                $model->ipStatus = [];
                $n               = 0;
                foreach ($map['IpStatus'] as $item) {
                    $model->ipStatus[$n++] = null !== $item ? ipStatus::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
