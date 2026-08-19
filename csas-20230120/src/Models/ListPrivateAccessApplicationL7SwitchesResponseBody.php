<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\ListPrivateAccessApplicationL7SwitchesResponseBody\l7Switches;

class ListPrivateAccessApplicationL7SwitchesResponseBody extends Model
{
    /**
     * @var l7Switches[]
     */
    public $l7Switches;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'l7Switches' => 'L7Switches',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->l7Switches)) {
            Model::validateArray($this->l7Switches);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->l7Switches) {
            if (\is_array($this->l7Switches)) {
                $res['L7Switches'] = [];
                $n1 = 0;
                foreach ($this->l7Switches as $item1) {
                    $res['L7Switches'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['L7Switches'])) {
            if (!empty($map['L7Switches'])) {
                $model->l7Switches = [];
                $n1 = 0;
                foreach ($map['L7Switches'] as $item1) {
                    $model->l7Switches[$n1] = l7Switches::fromMap($item1);
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
