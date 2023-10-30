<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class GetProjectFeatureEntityHotIdsResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @example 1,2,3
     *
     * @var string
     */
    public $hotIds;

    /**
     * @example 5
     *
     * @var string
     */
    public $nextSeqNumber;

    /**
     * @example FFD39C0F-DD8D-51B2-864E-2842206DB0E8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'count'         => 'Count',
        'hotIds'        => 'HotIds',
        'nextSeqNumber' => 'NextSeqNumber',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->hotIds) {
            $res['HotIds'] = $this->hotIds;
        }
        if (null !== $this->nextSeqNumber) {
            $res['NextSeqNumber'] = $this->nextSeqNumber;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectFeatureEntityHotIdsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HotIds'])) {
            $model->hotIds = $map['HotIds'];
        }
        if (isset($map['NextSeqNumber'])) {
            $model->nextSeqNumber = $map['NextSeqNumber'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
