<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class ListConversationLogsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[][]
     */
    public $chatLogs;

    /**
     * @var int
     */
    public $rounds;
    protected $_name = [
        'requestId' => 'RequestId',
        'chatLogs'  => 'ChatLogs',
        'rounds'    => 'Rounds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->chatLogs) {
            $res['ChatLogs'] = $this->chatLogs;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ChatLogs'])) {
            if (!empty($map['ChatLogs'])) {
                $model->chatLogs = $map['ChatLogs'];
            }
        }
        if (isset($map['Rounds'])) {
            $model->rounds = $map['Rounds'];
        }

        return $model;
    }
}
