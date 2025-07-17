<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class GetIDEEventDetailRequest extends Model
{
    /**
     * @description The message ID in DataWorks OpenEvent. You can obtain the ID from a received message when an extension point event is triggered.
     *
     * This parameter is required.
     *
     * @example 8abcb91f-d266-4073-b907-2ed67****1
     *
     * @var string
     */
    public $messageId;

    /**
     * @description The DataWorks workspace ID. You can obtain the ID from the message.
     *
     * This parameter is required.
     *
     * @example 10000
     *
     * @var int
     */
    public $projectId;
    protected $_name = [
        'messageId' => 'MessageId',
        'projectId' => 'ProjectId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIDEEventDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        return $model;
    }
}
