<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ListConversationLogsResponseBody extends Model
{
    /**
     * @var mixed[][]
     */
    public $chatLogs;

    /**
     * @example B6082275-D0E3-4030-9478-FFC35BA90312
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1
     *
     * @var int
     */
    public $rounds;
    protected $_name = [
        'chatLogs'  => 'ChatLogs',
        'requestId' => 'RequestId',
        'rounds'    => 'Rounds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->chatLogs) {
            $res['ChatLogs'] = $this->chatLogs;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rounds) {
            $res['Rounds'] = $this->rounds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConversationLogsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatLogs'])) {
            if (!empty($map['ChatLogs'])) {
                $model->chatLogs = $map['ChatLogs'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Rounds'])) {
            $model->rounds = $map['Rounds'];
        }

        return $model;
    }
}
