<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gameshield\V20180305\Models;

use AlibabaCloud\SDK\Gameshield\V20180305\Models\DescribeCcZoneBlockConfigResponseBody\blockConfig;
use AlibabaCloud\Tea\Model;

class DescribeCcZoneBlockConfigResponseBody extends Model
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
     * @var blockConfig
     */
    public $blockConfig;
    protected $_name = [
        'requestId'   => 'RequestId',
        'promptInfo'  => 'PromptInfo',
        'blockConfig' => 'BlockConfig',
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
        if (null !== $this->blockConfig) {
            $res['BlockConfig'] = null !== $this->blockConfig ? $this->blockConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCcZoneBlockConfigResponseBody
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
        if (isset($map['BlockConfig'])) {
            $model->blockConfig = blockConfig::fromMap($map['BlockConfig']);
        }

        return $model;
    }
}
