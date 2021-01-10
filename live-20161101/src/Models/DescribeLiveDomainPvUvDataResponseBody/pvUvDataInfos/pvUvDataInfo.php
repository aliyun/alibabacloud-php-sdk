<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPvUvDataResponseBody\pvUvDataInfos;

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
    public $UV;

    /**
     * @var string
     */
    public $timeStamp;
    protected $_name = [
        'PV'        => 'PV',
        'UV'        => 'UV',
        'timeStamp' => 'TimeStamp',
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
        if (null !== $this->UV) {
            $res['UV'] = $this->UV;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
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
        if (isset($map['UV'])) {
            $model->UV = $map['UV'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
