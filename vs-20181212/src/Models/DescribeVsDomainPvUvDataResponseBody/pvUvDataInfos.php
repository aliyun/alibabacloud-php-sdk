<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponseBody\pvUvDataInfos\pvUvDataInfo;

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
        if (\is_array($this->pvUvDataInfo)) {
            Model::validateArray($this->pvUvDataInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pvUvDataInfo) {
            if (\is_array($this->pvUvDataInfo)) {
                $res['PvUvDataInfo'] = [];
                $n1 = 0;
                foreach ($this->pvUvDataInfo as $item1) {
                    $res['PvUvDataInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PvUvDataInfo'])) {
            if (!empty($map['PvUvDataInfo'])) {
                $model->pvUvDataInfo = [];
                $n1 = 0;
                foreach ($map['PvUvDataInfo'] as $item1) {
                    $model->pvUvDataInfo[$n1] = pvUvDataInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
