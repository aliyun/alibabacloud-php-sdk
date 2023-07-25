<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnL2IpsResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example C370DAF1-C838-4288-A1A0-9A87633D248E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The CIDR blocks of the POPs.
     *
     * @var string[]
     */
    public $vips;
    protected $_name = [
        'requestId' => 'RequestId',
        'vips'      => 'Vips',
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
        if (null !== $this->vips) {
            $res['Vips'] = $this->vips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnL2IpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Vips'])) {
            if (!empty($map['Vips'])) {
                $model->vips = $map['Vips'];
            }
        }

        return $model;
    }
}
