<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\ListFCTriggerResponseBody\FCTriggers;

class ListFCTriggerResponseBody extends Model
{
    /**
     * @var FCTriggers[]
     */
    public $FCTriggers;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'FCTriggers' => 'FCTriggers',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->FCTriggers)) {
            Model::validateArray($this->FCTriggers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->FCTriggers) {
            if (\is_array($this->FCTriggers)) {
                $res['FCTriggers'] = [];
                $n1 = 0;
                foreach ($this->FCTriggers as $item1) {
                    $res['FCTriggers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FCTriggers'])) {
            if (!empty($map['FCTriggers'])) {
                $model->FCTriggers = [];
                $n1 = 0;
                foreach ($map['FCTriggers'] as $item1) {
                    $model->FCTriggers[$n1] = FCTriggers::fromMap($item1);
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
