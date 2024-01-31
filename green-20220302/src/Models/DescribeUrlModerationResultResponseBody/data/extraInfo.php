<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeUrlModerationResultResponseBody\data;

use AlibabaCloud\Tea\Model;

class extraInfo extends Model
{
    /**
     * @var string
     */
    public $icpNo;

    /**
     * @var string
     */
    public $icpType;
    protected $_name = [
        'icpNo'   => 'IcpNo',
        'icpType' => 'IcpType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icpNo) {
            $res['IcpNo'] = $this->icpNo;
        }
        if (null !== $this->icpType) {
            $res['IcpType'] = $this->icpType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return extraInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IcpNo'])) {
            $model->icpNo = $map['IcpNo'];
        }
        if (isset($map['IcpType'])) {
            $model->icpType = $map['IcpType'];
        }

        return $model;
    }
}
