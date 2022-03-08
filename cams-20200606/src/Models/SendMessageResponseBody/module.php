<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\SendMessageResponseBody;

use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var string
     */
    public $fromId;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $toId;
    protected $_name = [
        'fromId'    => 'FromId',
        'messageId' => 'MessageId',
        'toId'      => 'ToId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fromId) {
            $res['FromId'] = $this->fromId;
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->toId) {
            $res['ToId'] = $this->toId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FromId'])) {
            $model->fromId = $map['FromId'];
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['ToId'])) {
            $model->toId = $map['ToId'];
        }

        return $model;
    }
}
