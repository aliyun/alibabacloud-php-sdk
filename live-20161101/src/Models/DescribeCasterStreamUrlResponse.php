<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterStreamUrlResponse\casterStreams;
use AlibabaCloud\Tea\Model;

class DescribeCasterStreamUrlResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $casterId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var casterStreams
     */
    public $casterStreams;
    protected $_name = [
        'requestId'     => 'RequestId',
        'casterId'      => 'CasterId',
        'total'         => 'Total',
        'casterStreams' => 'CasterStreams',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('casterId', $this->casterId, true);
        Model::validateRequired('total', $this->total, true);
        Model::validateRequired('casterStreams', $this->casterStreams, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->casterId) {
            $res['CasterId'] = $this->casterId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->casterStreams) {
            $res['CasterStreams'] = null !== $this->casterStreams ? $this->casterStreams->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCasterStreamUrlResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CasterId'])) {
            $model->casterId = $map['CasterId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['CasterStreams'])) {
            $model->casterStreams = casterStreams::fromMap($map['CasterStreams']);
        }

        return $model;
    }
}
