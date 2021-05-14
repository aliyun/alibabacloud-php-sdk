<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeSupportRegionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $supportRegion;
    protected $_name = [
        'requestId'     => 'RequestId',
        'supportRegion' => 'SupportRegion',
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
        if (null !== $this->supportRegion) {
            $res['SupportRegion'] = $this->supportRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSupportRegionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportRegion'])) {
            if (!empty($map['SupportRegion'])) {
                $model->supportRegion = $map['SupportRegion'];
            }
        }

        return $model;
    }
}
