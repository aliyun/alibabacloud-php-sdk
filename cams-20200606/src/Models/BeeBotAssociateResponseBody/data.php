<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateResponseBody\data\associate;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var associate[]
     */
    public $associate;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'associate' => 'Associate',
        'messageId' => 'MessageId',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->associate) {
            $res['Associate'] = [];
            if (null !== $this->associate && \is_array($this->associate)) {
                $n = 0;
                foreach ($this->associate as $item) {
                    $res['Associate'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Associate'])) {
            if (!empty($map['Associate'])) {
                $model->associate = [];
                $n                = 0;
                foreach ($map['Associate'] as $item) {
                    $model->associate[$n++] = null !== $item ? associate::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
