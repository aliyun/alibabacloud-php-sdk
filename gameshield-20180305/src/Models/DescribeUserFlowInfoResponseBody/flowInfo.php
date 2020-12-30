<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeUserFlowInfoResponseBody;

use AlibabaCloud\Tea\Model;

class flowInfo extends Model
{
    /**
     * @var int
     */
    public $bizBandWidth;
    protected $_name = [
        'bizBandWidth' => 'BizBandWidth',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizBandWidth) {
            $res['BizBandWidth'] = $this->bizBandWidth;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizBandWidth'])) {
            $model->bizBandWidth = $map['BizBandWidth'];
        }

        return $model;
    }
}
