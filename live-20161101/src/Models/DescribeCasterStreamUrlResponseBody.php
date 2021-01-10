<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponseBody\casterStreams;
use AlibabaCloud\Tea\Model;

class DescribeCasterStreamUrlResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var casterStreams
     */
    public $casterStreams;

    /**
     * @var string
     */
    public $casterId;
    protected $_name = [
        'requestId'     => 'RequestId',
        'total'         => 'Total',
        'casterStreams' => 'CasterStreams',
        'casterId'      => 'CasterId',
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
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->casterStreams) {
            $res['CasterStreams'] = null !== $this->casterStreams ? $this->casterStreams->toMap() : null;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['CasterStreams'])) {
            $model->casterStreams = casterStreams::fromMap($map['CasterStreams']);
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }

        return $model;
    }
}
