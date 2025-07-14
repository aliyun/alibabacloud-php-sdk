<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesResponseBody\instances\instance;

use AlibabaCloud\Tea\Model;

class clockOptions extends Model
{
    /**
     * @var string
     */
    public $ptpStatus;
    protected $_name = [
        'ptpStatus' => 'PtpStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ptpStatus) {
            $res['PtpStatus'] = $this->ptpStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clockOptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PtpStatus'])) {
            $model->ptpStatus = $map['PtpStatus'];
        }

        return $model;
    }
}
