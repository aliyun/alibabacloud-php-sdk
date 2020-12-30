<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\MassPushResponseBody;

use AlibabaCloud\Tea\Model;

class messageIds extends Model
{
    /**
     * @var string[]
     */
    public $messageId;
    protected $_name = [
        'messageId' => 'MessageId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messageIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MessageId'])) {
            if (!empty($map['MessageId'])) {
                $model->messageId = $map['MessageId'];
            }
        }

        return $model;
    }
}
