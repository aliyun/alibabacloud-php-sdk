<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class GetIpsetsBandwidthLimitResponseBody extends Model
{
    /**
     * @var string
     */
    public $bandwidthAllocationType;

    /**
     * @var int
     */
    public $bandwidthLimit;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bandwidthAllocationType' => 'BandwidthAllocationType',
        'bandwidthLimit' => 'BandwidthLimit',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bandwidthAllocationType) {
            $res['BandwidthAllocationType'] = $this->bandwidthAllocationType;
        }

        if (null !== $this->bandwidthLimit) {
            $res['BandwidthLimit'] = $this->bandwidthLimit;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthAllocationType'])) {
            $model->bandwidthAllocationType = $map['BandwidthAllocationType'];
        }

        if (isset($map['BandwidthLimit'])) {
            $model->bandwidthLimit = $map['BandwidthLimit'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
