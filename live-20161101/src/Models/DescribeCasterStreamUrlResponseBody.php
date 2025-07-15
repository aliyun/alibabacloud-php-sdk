<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams;
use AlibabaCloud\Tea\Model;

class DescribeCasterStreamUrlResponseBody extends Model
{
    /**
     * @description The ID of the production studio.
     *
     * @example a2b8e671-2fe5-4642-a2ec-bf93880e****
     *
     * @var string
     */
    public $casterId;

    /**
     * @description The information about the streams of the production studio.
     *
     * @var casterStreams
     */
    public $casterStreams;

    /**
     * @description The ID of the request.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of streams that were returned.
     *
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'casterId' => 'CasterId',
        'casterStreams' => 'CasterStreams',
        'requestId' => 'RequestId',
        'total' => 'Total',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->casterStreams) {
            $res['CasterStreams'] = null !== $this->casterStreams ? $this->casterStreams->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterStreamUrlResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['CasterStreams'])) {
            $model->casterStreams = casterStreams::fromMap($map['CasterStreams']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
