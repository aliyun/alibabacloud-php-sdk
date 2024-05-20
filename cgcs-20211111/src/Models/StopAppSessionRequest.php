<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\StopAppSessionRequest\stopParam;
use AlibabaCloud\Tea\Model;

class StopAppSessionRequest extends Model
{
    /**
     * @example 1ADE0XXXX
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 100XXXX
     *
     * @var string
     */
    public $platformSessionId;

    /**
     * @description 停止容器参数。此参数将透传到Agent。
     *
     * @var stopParam[]
     */
    public $stopParam;
    protected $_name = [
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
        'stopParam'         => 'StopParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }
        if (null !== $this->stopParam) {
            $res['StopParam'] = [];
            if (null !== $this->stopParam && \is_array($this->stopParam)) {
                $n = 0;
                foreach ($this->stopParam as $item) {
                    $res['StopParam'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopAppSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }
        if (isset($map['StopParam'])) {
            if (!empty($map['StopParam'])) {
                $model->stopParam = [];
                $n                = 0;
                foreach ($map['StopParam'] as $item) {
                    $model->stopParam[$n++] = null !== $item ? stopParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
