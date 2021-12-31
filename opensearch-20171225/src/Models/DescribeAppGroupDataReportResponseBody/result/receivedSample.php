<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody\result;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\DescribeAppGroupDataReportResponseBody\result\receivedSample\message;
use AlibabaCloud\Tea\Model;

class receivedSample extends Model
{
    /**
     * @var message
     */
    public $message;

    /**
     * @var int
     */
    public $receivedTimeMs;
    protected $_name = [
        'message'        => 'message',
        'receivedTimeMs' => 'receivedTimeMs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = null !== $this->message ? $this->message->toMap() : null;
        }
        if (null !== $this->receivedTimeMs) {
            $res['receivedTimeMs'] = $this->receivedTimeMs;
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
        if (isset($map['message'])) {
            $model->message = message::fromMap($map['message']);
        }
        if (isset($map['receivedTimeMs'])) {
            $model->receivedTimeMs = $map['receivedTimeMs'];
        }

        return $model;
    }
}
