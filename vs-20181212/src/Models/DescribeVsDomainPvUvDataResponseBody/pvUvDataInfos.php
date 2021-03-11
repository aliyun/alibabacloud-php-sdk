<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponseBody\pvUvDataInfos\pvUvDataInfo;
use AlibabaCloud\Tea\Model;

class pvUvDataInfos extends Model
{
    /**
     * @var pvUvDataInfo[]
     */
    public $pvUvDataInfo;
    protected $_name = [
        'pvUvDataInfo' => 'PvUvDataInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pvUvDataInfo) {
            $res['PvUvDataInfo'] = [];
            if (null !== $this->pvUvDataInfo && \is_array($this->pvUvDataInfo)) {
                $n = 0;
                foreach ($this->pvUvDataInfo as $item) {
                    $res['PvUvDataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvUvDataInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PvUvDataInfo'])) {
            if (!empty($map['PvUvDataInfo'])) {
                $model->pvUvDataInfo = [];
                $n                   = 0;
                foreach ($map['PvUvDataInfo'] as $item) {
                    $model->pvUvDataInfo[$n++] = null !== $item ? pvUvDataInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
