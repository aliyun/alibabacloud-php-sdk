<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveStreamCountResponseBody\streamCountInfos\streamCountInfo\streamCountDetails;

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
     * @var streamCountDetails
     */
    public $streamCountDetails;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'count' => 'Count',
        'limit' => 'Limit',
        'streamCountDetails' => 'StreamCountDetails',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->streamCountDetails) {
            $this->streamCountDetails->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }

        if (null !== $this->streamCountDetails) {
            $res['StreamCountDetails'] = null !== $this->streamCountDetails ? $this->streamCountDetails->toArray($noStream) : $this->streamCountDetails;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
