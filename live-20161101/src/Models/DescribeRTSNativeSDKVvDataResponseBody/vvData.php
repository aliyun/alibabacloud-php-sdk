<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeRTSNativeSDKVvDataResponseBody;

use AlibabaCloud\Tea\Model;

class vvData extends Model
{
    /**
     * @var string
     */
    public $timeStamp;

    /**
     * @var string
     */
    public $vvSuccess;

    /**
     * @var string
     */
    public $vvTotal;
    protected $_name = [
        'timeStamp' => 'TimeStamp',
        'vvSuccess' => 'VvSuccess',
        'vvTotal'   => 'VvTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->vvSuccess) {
            $res['VvSuccess'] = $this->vvSuccess;
        }
        if (null !== $this->vvTotal) {
            $res['VvTotal'] = $this->vvTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vvData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['VvSuccess'])) {
            $model->vvSuccess = $map['VvSuccess'];
        }
        if (isset($map['VvTotal'])) {
            $model->vvTotal = $map['VvTotal'];
        }

        return $model;
    }
}
