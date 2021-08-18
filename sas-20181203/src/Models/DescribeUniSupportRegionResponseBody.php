<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUniSupportRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $uniSupportRegion;
    protected $_name = [
        'requestId'        => 'RequestId',
        'uniSupportRegion' => 'UniSupportRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->uniSupportRegion) {
            $res['UniSupportRegion'] = $this->uniSupportRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniSupportRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UniSupportRegion'])) {
            if (!empty($map['UniSupportRegion'])) {
                $model->uniSupportRegion = $map['UniSupportRegion'];
            }
        }

        return $model;
    }
}
