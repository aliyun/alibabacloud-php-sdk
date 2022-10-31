<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponseBody\recordDataInfos\recordDataInfo;

use AlibabaCloud\Tea\Model;

class detail extends Model
{
    /**
     * @var int
     */
    public $FLV;

    /**
     * @var int
     */
    public $MP4;

    /**
     * @var int
     */
    public $TS;
    protected $_name = [
        'FLV' => 'FLV',
        'MP4' => 'MP4',
        'TS'  => 'TS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->FLV) {
            $res['FLV'] = $this->FLV;
        }
        if (null !== $this->MP4) {
            $res['MP4'] = $this->MP4;
        }
        if (null !== $this->TS) {
            $res['TS'] = $this->TS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return detail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FLV'])) {
            $model->FLV = $map['FLV'];
        }
        if (isset($map['MP4'])) {
            $model->MP4 = $map['MP4'];
        }
        if (isset($map['TS'])) {
            $model->TS = $map['TS'];
        }

        return $model;
    }
}
