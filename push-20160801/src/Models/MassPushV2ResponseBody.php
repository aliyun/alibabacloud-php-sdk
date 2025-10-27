<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models;

use AlibabaCloud\Dara\Model;

class MassPushV2ResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $messageIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'messageIds' => 'MessageIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->messageIds)) {
            Model::validateArray($this->messageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->messageIds) {
            if (\is_array($this->messageIds)) {
                $res['MessageIds'] = [];
                $n1 = 0;
                foreach ($this->messageIds as $item1) {
                    $res['MessageIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MessageIds'])) {
            if (!empty($map['MessageIds'])) {
                $model->messageIds = [];
                $n1 = 0;
                foreach ($map['MessageIds'] as $item1) {
                    $model->messageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
