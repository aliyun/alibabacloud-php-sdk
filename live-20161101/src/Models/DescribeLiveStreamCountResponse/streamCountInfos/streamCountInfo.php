<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponse\streamCountInfos;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponse\streamCountInfos\streamCountInfo\streamCountDetails;
use AlibabaCloud\Tea\Model;

class streamCountInfo extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var int
     */
    public $limit;

    /**
     * @var string
     */
    public $type;

    /**
     * @var streamCountDetails
     */
    public $streamCountDetails;
    protected $_name = [
        'count'              => 'Count',
        'limit'              => 'Limit',
        'type'               => 'Type',
        'streamCountDetails' => 'StreamCountDetails',
    ];

    public function validate()
    {
        Model::validateRequired('count', $this->count, true);
        Model::validateRequired('limit', $this->limit, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('streamCountDetails', $this->streamCountDetails, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->streamCountDetails) {
            $res['StreamCountDetails'] = null !== $this->streamCountDetails ? $this->streamCountDetails->toMap() : null;
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['StreamCountDetails'])) {
            $model->streamCountDetails = streamCountDetails::fromMap($map['StreamCountDetails']);
        }

        return $model;
    }
}
