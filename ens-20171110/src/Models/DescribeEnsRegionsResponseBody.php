<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsRegionsResponseBody\ensRegions;
use AlibabaCloud\Tea\Model;

class DescribeEnsRegionsResponseBody extends Model
{
    /**
     * @description The service code. 0 is returned for a successful request. An error code is returned for a failed request.
     *
     * @example 0
     *
     * @var int
     */
    public $code;

    /**
     * @description The information about the regions.
     *
     * @var ensRegions
     */
    public $ensRegions;

    /**
     * @description The request ID.
     *
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code' => 'Code',
        'ensRegions' => 'EnsRegions',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->ensRegions) {
            $res['EnsRegions'] = null !== $this->ensRegions ? $this->ensRegions->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsRegionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['EnsRegions'])) {
            $model->ensRegions = ensRegions::fromMap($map['EnsRegions']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
