<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcRouteSwitchResponseBody\switch_;
use AlibabaCloud\Tea\Model;

class DescribeCcRouteSwitchResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var switch_
     */
    public $switch;

    /**
     * @var mixed[]
     */
    public $promptInfo;
    protected $_name = [
        'requestId'  => 'RequestId',
        'switch'     => 'Switch',
        'promptInfo' => 'PromptInfo',
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
        if (null !== $this->switch) {
            $res['Switch'] = null !== $this->switch ? $this->switch->toMap() : null;
        }
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcRouteSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Switch'])) {
            $model->switch = switch_::fromMap($map['Switch']);
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }

        return $model;
    }
}
