<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody\result;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody\result\receivedSample\message;
use AlibabaCloud\Tea\Model;

class receivedSample extends Model
{
    /**
     * @var int
     */
    public $receivedTimeMs;

    /**
     * @var message
     */
    public $message;
    protected $_name = [
        'receivedTimeMs' => 'receivedTimeMs',
        'message'        => 'message',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->receivedTimeMs) {
            $res['receivedTimeMs'] = $this->receivedTimeMs;
        }
        if (null !== $this->message) {
            $res['message'] = null !== $this->message ? $this->message->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return receivedSample
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['receivedTimeMs'])) {
            $model->receivedTimeMs = $map['receivedTimeMs'];
        }
        if (isset($map['message'])) {
            $model->message = message::fromMap($map['message']);
        }

        return $model;
    }
}
