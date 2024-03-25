<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DisconnectDesktopSessionsResponseBody\invalidSessions;
use AlibabaCloud\Tea\Model;

class DisconnectDesktopSessionsResponseBody extends Model
{
    /**
     * @description The list of invalid sessions.
     *
     * @var invalidSessions[]
     */
    public $invalidSessions;

    /**
     * @description The request ID.
     *
     * @example 2507CFA8-FEAB-5208-98F5-5E028C50XXXX
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'invalidSessions' => 'InvalidSessions',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->invalidSessions) {
            $res['InvalidSessions'] = [];
            if (null !== $this->invalidSessions && \is_array($this->invalidSessions)) {
                $n = 0;
                foreach ($this->invalidSessions as $item) {
                    $res['InvalidSessions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisconnectDesktopSessionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InvalidSessions'])) {
            if (!empty($map['InvalidSessions'])) {
                $model->invalidSessions = [];
                $n                      = 0;
                foreach ($map['InvalidSessions'] as $item) {
                    $model->invalidSessions[$n++] = null !== $item ? invalidSessions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
