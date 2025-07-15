<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo\streamCountDetails;
use AlibabaCloud\Tea\Model;

class streamCountInfo extends Model
{
    /**
     * @description The number of online streams.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The maximum allowed number of concurrently ingested streams. This parameter is available only to users in the whitelist.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The information about the live streams.
     *
     * @var streamCountDetails
     */
    public $streamCountDetails;

    /**
     * @description The type of the live stream. Valid values:
     *
     *   **raw**: source streams
     *   **trans**: transcoded streams
     *
     * @example raw
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'count' => 'Count',
        'limit' => 'Limit',
        'streamCountDetails' => 'StreamCountDetails',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->streamCountDetails) {
            $res['StreamCountDetails'] = null !== $this->streamCountDetails ? $this->streamCountDetails->toMap() : null;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['StreamCountDetails'])) {
            $model->streamCountDetails = streamCountDetails::fromMap($map['StreamCountDetails']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
