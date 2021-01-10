<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo\streamCountDetails;
use AlibabaCloud\Tea\Model;

class streamCountInfo extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var streamCountDetails
     */
    public $streamCountDetails;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $count;
    protected $_name = [
        'type'               => 'Type',
        'streamCountDetails' => 'StreamCountDetails',
        'limit'              => 'Limit',
        'count'              => 'Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->streamCountDetails) {
            $res['StreamCountDetails'] = null !== $this->streamCountDetails ? $this->streamCountDetails->toMap() : null;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return streamCountInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['StreamCountDetails'])) {
            $model->streamCountDetails = streamCountDetails::fromMap($map['StreamCountDetails']);
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
