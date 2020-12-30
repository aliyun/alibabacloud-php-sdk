<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcIDCBlockSwitchResponseBody\ccSwitch;
use AlibabaCloud\Tea\Model;

class DescribeCcIDCBlockSwitchResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $promptInfo;

    /**
     * @var ccSwitch
     */
    public $ccSwitch;
    protected $_name = [
        'requestId'  => 'RequestId',
        'promptInfo' => 'PromptInfo',
        'ccSwitch'   => 'CcSwitch',
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
        if (null !== $this->promptInfo) {
            $res['PromptInfo'] = $this->promptInfo;
        }
        if (null !== $this->ccSwitch) {
            $res['CcSwitch'] = null !== $this->ccSwitch ? $this->ccSwitch->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcIDCBlockSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PromptInfo'])) {
            $model->promptInfo = $map['PromptInfo'];
        }
        if (isset($map['CcSwitch'])) {
            $model->ccSwitch = ccSwitch::fromMap($map['CcSwitch']);
        }

        return $model;
    }
}
