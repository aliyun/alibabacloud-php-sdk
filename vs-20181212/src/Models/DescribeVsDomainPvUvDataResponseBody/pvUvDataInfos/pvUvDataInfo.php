<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsDomainPvUvDataResponseBody\pvUvDataInfos;

use AlibabaCloud\Tea\Model;

class pvUvDataInfo extends Model
{
    /**
     * @var string
     */
    public $PV;

    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $UV;
    protected $_name = [
        'PV'        => 'PV',
        'timeStamp' => 'TimeStamp',
        'UV'        => 'UV',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->PV) {
            $res['PV'] = $this->PV;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvUvDataInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PV'])) {
            $model->PV = $map['PV'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }

        return $model;
    }
}
