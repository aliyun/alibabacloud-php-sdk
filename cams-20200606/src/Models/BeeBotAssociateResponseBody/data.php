<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\BeeBotAssociateResponseBody\data\associate;

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
        if (\is_array($this->associate)) {
            Model::validateArray($this->associate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->associate) {
            if (\is_array($this->associate)) {
                $res['Associate'] = [];
                $n1 = 0;
                foreach ($this->associate as $item1) {
                    $res['Associate'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Associate'])) {
            if (!empty($map['Associate'])) {
                $model->associate = [];
                $n1 = 0;
                foreach ($map['Associate'] as $item1) {
                    $model->associate[$n1++] = associate::fromMap($item1);
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
