<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20180612\Models;

use AlibabaCloud\Tea\Model;

class ExportConversationDetailsResponseBody extends Model
{
    /**
     * @var string
     */
    public $exportTaskId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'exportTaskId' => 'ExportTaskId',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->exportTaskId) {
            $res['ExportTaskId'] = $this->exportTaskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExportConversationDetailsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExportTaskId'])) {
            $model->exportTaskId = $map['ExportTaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
