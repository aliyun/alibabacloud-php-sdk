<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceTypesResponseBody\instanceTypes\instanceType;

use AlibabaCloud\Tea\Model;

class clock extends Model
{
    /**
     * @description Whether PTP is supported. Possible values:
     *
     *   supported
     *   unsupported
     *
     * @example unsupported
     *
     * @var string
     */
    public $ptpSupport;
    protected $_name = [
        'ptpSupport' => 'PtpSupport',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ptpSupport) {
            $res['PtpSupport'] = $this->ptpSupport;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clock
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PtpSupport'])) {
            $model->ptpSupport = $map['PtpSupport'];
        }

        return $model;
    }
}
