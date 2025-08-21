<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\MassPushResponseBody;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->messageId)) {
            Model::validateArray($this->messageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageId) {
            if (\is_array($this->messageId)) {
                $res['MessageId'] = [];
                $n1 = 0;
                foreach ($this->messageId as $item1) {
                    $res['MessageId'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['MessageId'])) {
            if (!empty($map['MessageId'])) {
                $model->messageId = [];
                $n1 = 0;
                foreach ($map['MessageId'] as $item1) {
                    $model->messageId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
