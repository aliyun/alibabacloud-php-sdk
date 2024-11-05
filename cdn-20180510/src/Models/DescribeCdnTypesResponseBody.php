<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnTypesResponseBody\cdnTypes;
use AlibabaCloud\Tea\Model;

class DescribeCdnTypesResponseBody extends Model
{
    /**
     * @var cdnTypes
     */
    public $cdnTypes;

    /**
     * @example BDA62CE4-3477-439A-B52E-D2D7C829D7C1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cdnTypes'  => 'CdnTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdnTypes) {
            $res['CdnTypes'] = null !== $this->cdnTypes ? $this->cdnTypes->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnTypesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdnTypes'])) {
            $model->cdnTypes = cdnTypes::fromMap($map['CdnTypes']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
